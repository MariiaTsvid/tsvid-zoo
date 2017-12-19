(C) 2011 Jan-Willem Krans (janwillem32 <at> hotmail.com)
This file is part of Video pixel shader pack.
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, version 2.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

readme - how to properly chain shaders

For regular SD&HD video input, the following shader order is correct:
-input video
	-any amount of "for SD&HD video input"-type shaders (these use Y'CbCr mode)
	-one "gamma conversion of HD&SD video RGB to linear RGB" shader
	-any amount of regular shaders
	-any amount of scaling/resizer shaders (when downscaling)
-screenspace
	-any amount of scaling/resizer shaders (when upscaling)
	-any amount of regular shaders
	-one "gamma conversion of linear RGB to"-type shader*
-video output

*Use the "gamma conversion of linear RGB to wide gamut RGB" shader for near 2.2 gamma display devices.
*Use the "gamma conversion of linear RGB to HD&SD video RGB" shader for display devices with a calibrated .ICM display color profile installed system-wide and color management option in the program enabled, display devices connected with Y'CbCr mode over DisplayPort or HDMI, or with display devices that have a very specific need for a BT.709 or BT.601 derived RGB input.

**The "0-256 to 16-235 for SD&HD video output" is an exeption, it needs HD&SD video RGB input gamma, and it has to be placed at the very end of the chain of shaders, and only without any further software color management or video card driver-based color correction.


Optimization trick:
When the display resolution always remains the same when playing video, the c0.xy and c1.xy registers are always the same.
For screenspace shaders, this means that these registers can be made into static numbers.
Examples for replacements in a 1920×1080 display resolution (refresh rate is unimportant):

float c1;
to
#define c1 (1/1920.)

float2 c1;
to
#define c1 float2(1/1920., 1/1080.)

float c0;
to
#define c0 1920.

float2 c0;
to
#define c0 float2(1920, 1080)

float3 c0;
to
float3 pc0;
#define c0 float3(1920, 1080, pc0.z)

float4 c0;
to
float4 pc0;
#define c0 float4(1920, 1080, pc0.zw)

The clock and counter in c0.zw can't be made constant.
This optimization can also be used on input video shaders, but these are then bound to the resolution of the input video.