<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IoT Sensor Monitoring Dashboard - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
        </style>
    @endif
</head>
<body class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">
                            🌱 ProjectAgri
                        </h1>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ url('/') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Home</a>
                        <a href="{{ route('catalog') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Catalog</a>
                        <a href="{{ route('purchase-history') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Purchase History</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Dashboard Header -->
    <section class="relative overflow-hidden py-16">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-cyan-400/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    IoT Sensor Monitoring Dashboard
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Monitor real-time sensor data from your agricultural IoT devices.
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <button onclick="refreshData()" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <svg class="inline-block w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        Refresh Data
                    </button>
                    <button onclick="handleLogout()" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <svg class="inline-block w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Content -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Sensor Status Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8" id="sensor-cards-container">
                <!-- Temperature Sensor -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-gray-700 transition-all duration-300" id="temp-card">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-3xl">🌡️</div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white" id="temp-value">
                                <div class="animate-pulse bg-gray-300 dark:bg-gray-600 h-8 w-16 rounded"></div>
                            </div>
                            <div class="text-sm text-gray-500">°C</div>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Temperature</h3>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-2">
                        <div class="bg-gradient-to-r from-blue-500 to-red-500 h-2 rounded-full transition-all duration-1000 ease-out" id="temp-bar" style="width: 0%"></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Current air temperature</p>
                        <div class="flex items-center space-x-1">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse" id="temp-status"></div>
                            <span class="text-xs text-gray-500" id="temp-status-text">Loading...</span>
                        </div>
                    </div>
                </div>

                <!-- Humidity Sensor -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-gray-700 transition-all duration-300" id="humidity-card">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-3xl">💧</div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white" id="humidity-value">
                                <div class="animate-pulse bg-gray-300 dark:bg-gray-600 h-8 w-16 rounded"></div>
                            </div>
                            <div class="text-sm text-gray-500">%</div>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Humidity</h3>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-2">
                        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 h-2 rounded-full transition-all duration-1000 ease-out" id="humidity-bar" style="width: 0%"></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Air humidity level</p>
                        <div class="flex items-center space-x-1">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse" id="humidity-status"></div>
                            <span class="text-xs text-gray-500" id="humidity-status-text">Loading...</span>
                        </div>
                    </div>
                </div>

                <!-- Soil Moisture Sensor -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-gray-700 transition-all duration-300" id="soil-card">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-3xl">🌱</div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white" id="soil-value">
                                <div class="animate-pulse bg-gray-300 dark:bg-gray-600 h-8 w-16 rounded"></div>
                            </div>
                            <div class="text-sm text-gray-500">%</div>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Soil Moisture</h3>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-2">
                        <div class="bg-gradient-to-r from-brown-400 to-green-500 h-2 rounded-full transition-all duration-1000 ease-out" id="soil-bar" style="width: 0%"></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Soil water content</p>
                        <div class="flex items-center space-x-1">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse" id="soil-status"></div>
                            <span class="text-xs text-gray-500" id="soil-status-text">Loading...</span>
                        </div>
                    </div>
                </div>

                <!-- Light Sensor -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-gray-700 transition-all duration-300" id="light-card">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-3xl">☀️</div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white" id="light-value">
                                <div class="animate-pulse bg-gray-300 dark:bg-gray-600 h-8 w-20 rounded"></div>
                            </div>
                            <div class="text-sm text-gray-500">lux</div>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Light Level</h3>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-2">
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-2 rounded-full transition-all duration-1000 ease-out" id="light-bar" style="width: 0%"></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Ambient light intensity</p>
                        <div class="flex items-center space-x-1">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse" id="light-status"></div>
                            <span class="text-xs text-gray-500" id="light-status-text">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Loading State Overlay -->
            <div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-2xl text-center">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-green-600 mx-auto mb-4"></div>
                    <p class="text-gray-900 dark:text-white font-semibold">Loading dashboard data...</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">This should take less than 2 seconds</p>
                </div>
            </div>

            <!-- Error State Container -->
            <div id="error-container" class="hidden bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-2xl p-6 mb-8">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-8 w-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <div class="ml-4 flex-1">
                        <h3 class="text-lg font-semibold text-red-800 dark:text-red-200">Failed to Load Sensor Data</h3>
                        <p class="text-red-700 dark:text-red-300 mt-1" id="error-message">Unable to connect to the sensor network. Please check your connection and try again.</p>
                    </div>
                    <div class="ml-4">
                        <button onclick="retryDataLoad()" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                            Retry
                        </button>
                    </div>
                </div>
            </div>

            <!-- Empty State Container -->
            <div id="empty-container" class="hidden text-center py-20">
                <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-r from-gray-200 to-gray-300 dark:from-gray-700 dark:to-gray-600 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-2">No Sensor Data Available</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-6">No sensor readings are currently available. This might be due to maintenance or connectivity issues.</p>
                <button onclick="retryDataLoad()" class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Check Again
                </button>
            </div>

            <!-- Charts Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Temperature Trend -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Temperature Trend</h2>
                        <div class="text-4xl">🌡️</div>
                    </div>
                    <div class="h-80">
                        <canvas id="tempChart"></canvas>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-4">
                        Temperature readings over the past 24 hours.
                    </p>
                </div>

                <!-- Sensor Health Status -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Sensor Status</h2>
                        <div class="text-4xl">⚡</div>
                    </div>
                    <div class="space-y-4">
                        <div id="sensorStatus" class="space-y-3">
                            <!-- Sensor status will be populated by JavaScript -->
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-4">
                        Real-time status of all connected sensors.
                    </p>
                </div>
            </div>

            <!-- Environmental Trends -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Environmental Trends</h2>
                    <div class="text-4xl">📊</div>
                </div>
                <div class="h-80">
                    <canvas id="envChart"></canvas>
                </div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-4">
                    Combined environmental data trends over time.
                </p>
            </div>
        </div>
    </section>

            <!-- Profile Management Section -->
            <div class="mt-12 bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 overflow-hidden">
                <div class="border-b border-gray-200 dark:border-gray-700">
                    <nav class="flex space-x-8 px-8 py-4" aria-label="Tabs">
                        <button onclick="showProfileTab('profile')" id="profile-tab" class="tab-button border-indigo-500 text-indigo-600 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                            User Profile
                        </button>
                        <button onclick="showProfileTab('organization')" id="organization-tab" class="tab-button border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                            Organization
                        </button>
                        <button onclick="showProfileTab('password')" id="password-tab" class="tab-button border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                            Change Password
                        </button>
                        <button onclick="showProfileTab('role')" id="role-tab" class="tab-button border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                            User Role
                        </button>
                    </nav>
                </div>

                <!-- Profile Tab Content -->
                <div id="profile-content" class="tab-content p-8">
                    <div class="max-w-2xl">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Basic User Profile</h2>
                        <form onsubmit="saveProfile(event)" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">First Name</label>
                                    <input type="text" id="first_name" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" value="John">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Last Name</label>
                                    <input type="text" id="last_name" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" value="Doe">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
                                <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" value="john.doe@example.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Phone Number</label>
                                <input type="tel" id="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" value="+1 (555) 123-4567">
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-md shadow-sm transition-colors duration-200">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Organization Tab Content -->
                <div id="organization-content" class="tab-content p-8 hidden">
                    <div class="max-w-2xl">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Organization Information</h2>
                        <form onsubmit="saveOrganization(event)" class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Company Name</label>
                                <input type="text" id="company_name" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" value="AgriTech Solutions Inc.">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Industry</label>
                                <select id="industry" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="agriculture">Agriculture</option>
                                    <option value="horticulture">Horticulture</option>
                                    <option value="hydroponics">Hydroponics</option>
                                    <option value="greenhouse">Greenhouse</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Company Size</label>
                                <select id="company_size" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="small">1-50 employees</option>
                                    <option value="medium">51-200 employees</option>
                                    <option value="large">201+ employees</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Business Address</label>
                                <textarea id="business_address" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your business address">123 Agriculture Way, Farmville, CA 12345, USA</textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-md shadow-sm transition-colors duration-200">
                                    Save Organization
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Password Tab Content -->
                <div id="password-content" class="tab-content p-8 hidden">
                    <div class="max-w-2xl">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Change Password</h2>
                        <form onsubmit="changePassword(event)" class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Current Password</label>
                                <input type="password" id="current_password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">New Password</label>
                                <input type="password" id="new_password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required minlength="8">
                                <p class="text-sm text-gray-500 mt-1">Password must be at least 8 characters long and contain uppercase, lowercase, and numbers.</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Confirm New Password</label>
                                <input type="password" id="confirm_password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required minlength="8">
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-md shadow-sm transition-colors duration-200">
                                    Change Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Role Tab Content -->
                <div id="role-content" class="tab-content p-8 hidden">
                    <div class="max-w-2xl">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">User Role Information</h2>
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Current Role</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Your account permissions and access level</p>
                                </div>
                                <span id="user-role-badge" class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                    Customer
                                </span>
                            </div>
                            <div class="border-t border-gray-200 dark:border-gray-600 pt-4">
                                <h4 class="text-md font-medium text-gray-900 dark:text-white mb-2">Role Permissions</h4>
                                <ul class="list-disc list-inside text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                    <li>Access to sensor monitoring dashboard</li>
                                    <li>View real-time IoT sensor data</li>
                                    <li>Manage personal profile information</li>
                                    <li>Browse and purchase agricultural products</li>
                                    <li>View purchase history and analytics</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-6 text-sm text-gray-500">
                            <p>Role information is read-only and managed by system administrators. Contact support if you need to change your role or permissions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mt-12 bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Quick Actions</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <a href="{{ route('catalog') }}" class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 text-center">
                        <div class="text-3xl mb-3">🛒</div>
                        <h3 class="text-lg font-semibold mb-2">Browse Catalog</h3>
                        <p class="text-green-100 text-sm">Explore our full range of agricultural products</p>
                    </a>
                    <a href="{{ route('purchase-history') }}" class="bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 text-center">
                        <div class="text-3xl mb-3">📋</div>
                        <h3 class="text-lg font-semibold mb-2">Purchase History</h3>
                        <p class="text-blue-100 text-sm">View detailed history of all your purchases</p>
                    </a>
                    <button onclick="exportReport()" class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 text-center">
                        <div class="text-3xl mb-3">📈</div>
                        <h3 class="text-lg font-semibold mb-2">Export Report</h3>
                        <p class="text-purple-100 text-sm">Download your purchase analytics report</p>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Global state management
        let isLoading = false;
        let loadingStartTime = 0;
        let sensorCharts = {};
        let updateInterval;

        // Performance monitoring
        function startPerformanceTimer() {
            loadingStartTime = performance.now();
        }

        function endPerformanceTimer() {
            const loadTime = performance.now() - loadingStartTime;
            console.log(`Dashboard loaded in ${loadTime.toFixed(2)}ms`);
            return loadTime;
        }

        // Mock IoT sensor data with performance optimization - frontend only
        function getMockSensorData() {
            const data = [];
            const now = new Date();

            // Optimized data generation - reduce iterations for better performance
            for (let i = 23; i >= 0; i -= 1) { // Process every hour
                const timestamp = new Date(now.getTime() - i * 60 * 60 * 1000);
                data.push({
                    timestamp: timestamp.toISOString(),
                    temperature: 15 + Math.random() * 20 + Math.sin(i / 3) * 5, // 15-35°C with variation
                    humidity: 40 + Math.random() * 40 + Math.sin(i / 4) * 10, // 40-80%
                    soil_moisture: 30 + Math.random() * 50 + Math.sin(i / 2) * 15, // 30-80%
                    light_level: 1000 + Math.random() * 50000 + Math.sin(i / 6) * 10000 // 1000-51000 lux
                });
            }
            return data;
        }

        // Get current sensor readings with error simulation
        function getCurrentSensorReadings() {
            // Simulate occasional network errors (2% chance)
            if (Math.random() < 0.02) {
                throw new Error('Network connection lost');
            }

            // Simulate loading delay for performance testing
            const delay = Math.random() * 200; // 0-200ms random delay
            const start = performance.now();
            while (performance.now() - start < delay) {}

            return {
                temperature: 22.5 + (Math.random() - 0.5) * 4,
                humidity: 65 + (Math.random() - 0.5) * 10,
                soil_moisture: 55 + (Math.random() - 0.5) * 15,
                light_level: 15000 + (Math.random() - 0.5) * 10000
            };
        }

        // Show skeleton loading state
        function showSkeletonLoading() {
            const cards = ['temp', 'humidity', 'soil', 'light'];
            cards.forEach(card => {
                const valueElement = document.getElementById(`${card}-value`);
                const statusElement = document.getElementById(`${card}-status-text`);
                const statusDot = document.getElementById(`${card}-status`);

                // Replace content with skeleton
                valueElement.innerHTML = '<div class="animate-pulse bg-gray-300 dark:bg-gray-600 h-8 w-16 rounded"></div>';
                statusElement.textContent = 'Loading...';
                statusDot.className = 'w-2 h-2 bg-yellow-500 rounded-full animate-pulse';
            });
        }

        // Hide skeleton loading and show real data
        function hideSkeletonLoading() {
            // This will be handled by updateSensorDisplay
        }

        // Update sensor display with smooth transitions
        function updateSensorDisplay(readings = null) {
            try {
                if (!readings) {
                    readings = getCurrentSensorReadings();
                }

                const cards = [
                    { id: 'temp', value: readings.temperature.toFixed(1), max: 40, unit: '°C' },
                    { id: 'humidity', value: readings.humidity.toFixed(1), max: 100, unit: '%' },
                    { id: 'soil', value: readings.soil_moisture.toFixed(1), max: 100, unit: '%' },
                    { id: 'light', value: Math.round(readings.light_level), max: 60000, unit: 'lux' }
                ];

                cards.forEach((card, index) => {
                    setTimeout(() => {
                        const valueElement = document.getElementById(`${card.id}-value`);
                        const barElement = document.getElementById(`${card.id}-bar`);
                        const statusElement = document.getElementById(`${card.id}-status-text`);
                        const statusDot = document.getElementById(`${card.id}-status`);

                        // Smooth transition for value update
                        valueElement.style.transition = 'opacity 0.3s ease-out';
                        valueElement.style.opacity = '0';

                        setTimeout(() => {
                            // Update value
                            valueElement.innerHTML = card.value;
                            valueElement.style.opacity = '1';

                            // Update progress bar with animation
                            const percentage = Math.min((card.value / card.max) * 100, 100);
                            barElement.style.width = `${percentage}%`;

                            // Update status
                            statusElement.textContent = 'Online';
                            statusDot.className = 'w-2 h-2 bg-green-500 rounded-full animate-pulse';
                        }, 150);
                    }, index * 100); // Stagger animations
                });

            } catch (error) {
                handleSensorError(error);
            }
        }

        // Handle sensor data errors
        function handleSensorError(error) {
            console.error('Sensor error:', error);

            // Update status indicators
            const cards = ['temp', 'humidity', 'soil', 'light'];
            cards.forEach(card => {
                const statusElement = document.getElementById(`${card}-status-text`);
                const statusDot = document.getElementById(`${card}-status`);
                const valueElement = document.getElementById(`${card}-value`);

                statusElement.textContent = 'Error';
                statusDot.className = 'w-2 h-2 bg-red-500 rounded-full';
                valueElement.innerHTML = '<span class="text-red-500 text-sm">N/A</span>';
            });

            // Show error container
            showErrorContainer(error.message);
        }

        // Show error container
        function showErrorContainer(message) {
            const errorContainer = document.getElementById('error-container');
            const errorMessage = document.getElementById('error-message');

            errorMessage.textContent = message || 'Unable to connect to the sensor network. Please check your connection and try again.';
            errorContainer.classList.remove('hidden');

            // Hide loading states
            hideLoadingStates();
        }

        // Hide error container
        function hideErrorContainer() {
            document.getElementById('error-container').classList.add('hidden');
        }

        // Show empty state
        function showEmptyState() {
            document.getElementById('empty-container').classList.remove('hidden');
            hideLoadingStates();
        }

        // Hide empty state
        function hideEmptyState() {
            document.getElementById('empty-container').classList.add('hidden');
        }

        // Show loading overlay
        function showLoadingOverlay() {
            document.getElementById('loading-overlay').classList.remove('hidden');
            isLoading = true;
            startPerformanceTimer();
        }

        // Hide loading overlay
        function hideLoadingOverlay() {
            document.getElementById('loading-overlay').classList.add('hidden');
            isLoading = false;
            const loadTime = endPerformanceTimer();

            // Check performance requirement (< 2 seconds)
            if (loadTime > 2000) {
                console.warn(`Dashboard load time exceeded 2s: ${loadTime.toFixed(2)}ms`);
            }
        }

        // Hide all loading states
        function hideLoadingStates() {
            hideLoadingOverlay();
            hideSkeletonLoading();
        }

        // Process temperature trend data
        function processTempTrend(sensorData) {
            const labels = sensorData.map(d => {
                const date = new Date(d.timestamp);
                return date.toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
            });
            const data = sensorData.map(d => d.temperature);
            return { labels, data };
        }

        // Process environmental trends data
        function processEnvTrends(sensorData) {
            const labels = sensorData.map(d => {
                const date = new Date(d.timestamp);
                return date.toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
            });

            return {
                labels,
                datasets: [
                    {
                        label: 'Temperature (°C)',
                        data: sensorData.map(d => d.temperature),
                        borderColor: 'rgb(239, 68, 68)',
                        backgroundColor: 'rgba(239, 68, 68, 0.1)',
                        yAxisID: 'y',
                        tension: 0.4
                    },
                    {
                        label: 'Humidity (%)',
                        data: sensorData.map(d => d.humidity),
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        yAxisID: 'y1',
                        tension: 0.4
                    },
                    {
                        label: 'Soil Moisture (%)',
                        data: sensorData.map(d => d.soil_moisture),
                        borderColor: 'rgb(34, 197, 94)',
                        backgroundColor: 'rgba(34, 197, 94, 0.1)',
                        yAxisID: 'y1',
                        tension: 0.4
                    }
                ]
            };
        }

        // Get sensor status
        function getSensorStatus() {
            return [
                { name: 'Temperature Sensor', status: 'online', battery: 85 },
                { name: 'Humidity Sensor', status: 'online', battery: 92 },
                { name: 'Soil Moisture Sensor', status: 'online', battery: 78 },
                { name: 'Light Sensor', status: 'online', battery: 88 }
            ];
        }

        // Initialize dashboard
        async function initializeDashboard() {
            const sensorData = getMockSensorData();

            // Temperature Trend Chart
            const tempTrend = processTempTrend(sensorData);
            const tempCtx = document.getElementById('tempChart').getContext('2d');
            new Chart(tempCtx, {
                type: 'line',
                data: {
                    labels: tempTrend.labels,
                    datasets: [{
                        label: 'Temperature (°C)',
                        data: tempTrend.data,
                        borderColor: 'rgb(239, 68, 68)',
                        backgroundColor: 'rgba(239, 68, 68, 0.1)',
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: 'rgb(239, 68, 68)',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        }
                    }
                }
            });

            // Sensor Status
            const sensorStatus = getSensorStatus();
            const sensorStatusContainer = document.getElementById('sensorStatus');

            sensorStatus.forEach(sensor => {
                const sensorDiv = document.createElement('div');
                sensorDiv.className = 'flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg';
                sensorDiv.innerHTML = `
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">${sensor.name}</h4>
                            <p class="text-sm text-gray-500">Battery: ${sensor.battery}%</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Online
                        </span>
                    </div>
                `;
                sensorStatusContainer.appendChild(sensorDiv);
            });

            // Environmental Trends Chart
            const envTrends = processEnvTrends(sensorData);
            const envCtx = document.getElementById('envChart').getContext('2d');
            new Chart(envCtx, {
                type: 'line',
                data: envTrends,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            title: {
                                display: true,
                                text: 'Temperature (°C)'
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        y1: {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            title: {
                                display: true,
                                text: 'Humidity/Soil (%)'
                            },
                            grid: {
                                drawOnChartArea: false,
                            },
                        }
                    }
                }
            });

            // Start updating sensor display
            updateSensorDisplay();
            setInterval(updateSensorDisplay, 5000); // Update every 5 seconds
        }

        // Refresh data function
        function refreshData() {
            updateSensorDisplay();
            // In a real app, this would fetch new data from the server
            alert('Sensor data refreshed successfully!');
        }

        // Logout function
        function handleLogout() {
            if (confirm('Are you sure you want to logout?')) {
                // Clear all stored authentication data
                localStorage.removeItem('auth_token');
                localStorage.removeItem('user_role');
                localStorage.removeItem('user_name');
                localStorage.removeItem('remember_login');

                // Show logout message
                alert('You have been logged out successfully.');

                // Redirect to home page
                window.location.href = '{{ url("/") }}';
            }
        }

        // Export report function
        function exportReport() {
            alert('Export functionality would generate and download a PDF report with your sensor analytics.');
        }

        // Tab switching functions
        function showProfileTab(tabName) {
            // Hide all tab contents
            const contents = document.querySelectorAll('.tab-content');
            contents.forEach(content => content.classList.add('hidden'));

            // Remove active class from all tabs
            const tabs = document.querySelectorAll('.tab-button');
            tabs.forEach(tab => {
                tab.classList.remove('border-indigo-500', 'text-indigo-600');
                tab.classList.add('border-transparent', 'text-gray-500');
            });

            // Show selected tab content
            document.getElementById(tabName + '-content').classList.remove('hidden');

            // Make selected tab active
            document.getElementById(tabName + '-tab').classList.remove('border-transparent', 'text-gray-500');
            document.getElementById(tabName + '-tab').classList.add('border-indigo-500', 'text-indigo-600');
        }

        // Profile management functions
        function saveProfile(event) {
            event.preventDefault();
            const formData = {
                first_name: document.getElementById('first_name').value,
                last_name: document.getElementById('last_name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value
            };

            // Frontend validation
            if (!formData.first_name || !formData.last_name || !formData.email) {
                alert('Please fill in all required fields.');
                return;
            }

            // Simulate saving (frontend only)
            alert('Profile updated successfully! (Frontend simulation)');
            console.log('Profile data:', formData);
        }

        function saveOrganization(event) {
            event.preventDefault();
            const formData = {
                company_name: document.getElementById('company_name').value,
                industry: document.getElementById('industry').value,
                company_size: document.getElementById('company_size').value,
                business_address: document.getElementById('business_address').value
            };

            // Frontend validation
            if (!formData.company_name || !formData.business_address) {
                alert('Please fill in all required fields.');
                return;
            }

            // Simulate saving (frontend only)
            alert('Organization information updated successfully! (Frontend simulation)');
            console.log('Organization data:', formData);
        }

        function changePassword(event) {
            event.preventDefault();
            const currentPassword = document.getElementById('current_password').value;
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            // Frontend validation
            if (!currentPassword || !newPassword || !confirmPassword) {
                alert('Please fill in all password fields.');
                return;
            }

            if (newPassword !== confirmPassword) {
                alert('New passwords do not match.');
                return;
            }

            if (newPassword.length < 8) {
                alert('New password must be at least 8 characters long.');
                return;
            }

            // Simulate password change (frontend only)
            alert('Password changed successfully! You would be logged out in a real application.');
            console.log('Password change requested');

            // Clear form
            document.getElementById('current_password').value = '';
            document.getElementById('new_password').value = '';
            document.getElementById('confirm_password').value = '';
        }

        // Retry data loading function
        function retryDataLoad() {
            // Hide error and empty states
            hideErrorContainer();
            hideEmptyState();

            // Show loading overlay
            showLoadingOverlay();

            // Simulate data loading with performance monitoring
            setTimeout(() => {
                try {
                    // Attempt to load sensor data
                    const readings = getCurrentSensorReadings();
                    updateSensorDisplay(readings);

                    // Hide loading overlay
                    hideLoadingOverlay();

                    console.log('Data retry successful');
                } catch (error) {
                    console.error('Retry failed:', error);
                    hideLoadingOverlay();
                    showErrorContainer('Failed to reconnect to sensor network. Please check your internet connection.');
                }
            }, 800 + Math.random() * 400); // 800-1200ms delay to simulate network
        }

        // Enhanced refresh data function with loading states
        function refreshData() {
            if (isLoading) {
                console.log('Refresh already in progress');
                return;
            }

            // Show loading overlay
            showLoadingOverlay();

            setTimeout(() => {
                try {
                    updateSensorDisplay();

                    // Hide loading overlay
                    hideLoadingOverlay();

                    // Show success feedback
                    showSuccessMessage('Sensor data refreshed successfully!');
                } catch (error) {
                    hideLoadingOverlay();
                    handleSensorError(error);
                }
            }, 500 + Math.random() * 500); // 500-1000ms delay
        }

        // Show success message
        function showSuccessMessage(message) {
            // Create a temporary success message
            const successDiv = document.createElement('div');
            successDiv.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
            successDiv.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    ${message}
                </div>
            `;

            document.body.appendChild(successDiv);

            // Animate in
            setTimeout(() => {
                successDiv.classList.remove('translate-x-full');
            }, 100);

            // Remove after 3 seconds
            setTimeout(() => {
                successDiv.classList.add('translate-x-full');
                setTimeout(() => {
                    document.body.removeChild(successDiv);
                }, 300);
            }, 3000);
        }

        // Check authentication on page load
        document.addEventListener('DOMContentLoaded', function() {
            const token = localStorage.getItem('auth_token');
            const userRole = localStorage.getItem('user_role');
            const userName = localStorage.getItem('user_name');

            if (!token) {
                // Not authenticated, redirect to login
                window.location.href = '{{ route("login") }}';
                return;
            }

            // Update user role display
            const roleBadge = document.getElementById('user-role-badge');
            if (userRole === 'admin') {
                roleBadge.textContent = 'Administrator';
                roleBadge.className = 'inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800';
            } else if (userRole === 'mitra') {
                roleBadge.textContent = 'Partner';
                roleBadge.className = 'inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800';
            } else {
                roleBadge.textContent = 'Customer';
                roleBadge.className = 'inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800';
            }

            // Show initial loading state
            showSkeletonLoading();
            showLoadingOverlay();

            // Initialize dashboard with performance monitoring
            setTimeout(() => {
                initializeDashboard().then(() => {
                    hideLoadingOverlay();
                }).catch((error) => {
                    console.error('Dashboard initialization failed:', error);
                    hideLoadingOverlay();
                    showErrorContainer('Failed to initialize dashboard. Please refresh the page.');
                });
            }, 300 + Math.random() * 700); // 300-1000ms initial load simulation
        });
    </script>
</body>
</html>
