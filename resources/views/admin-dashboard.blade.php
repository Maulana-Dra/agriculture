<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Analytics & Decision Support Dashboard - {{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"*";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
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
                            🌱 AgriCatalog
                        </h1>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Home</a>
                        <a href="{{ route('catalog') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Catalog</a>
                        <a href="{{ route('purchase-history') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Purchase History</a>
                        <a href="{{ route('admin-dashboard') }}" class="bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200">Admin Dashboard</a>
                        <a href="{{ route('admin-iot-dashboard') }}" class="bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200">Admin IoT Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-400/20 to-indigo-400/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    Admin Analytics & Decision Support Dashboard
                    <span class="bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Analytics</span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Comprehensive analytics and insights for data-driven agricultural decision making.
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <button onclick="scrollToSection('analytics')" class="bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <svg class="inline-block w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        View Analytics
                    </button>
                    <button onclick="scrollToSection('export')" class="border-2 border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white font-semibold py-3 px-8 rounded-full transition-all duration-300">
                        <svg class="inline-block w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Export Reports
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Analytics Dashboard -->
    <section id="analytics" class="py-16 bg-white/50 dark:bg-gray-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Key Metrics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Revenue -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-3xl">💰</div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white" id="total-revenue">$2.4M</div>
                            <div class="text-sm text-gray-500">+12.5% from last month</div>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Total Revenue</h3>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-500 h-2 rounded-full" style="width: 85%"></div>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">Overall company revenue</p>
                </div>

                <!-- Production Volume -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-3xl">🌾</div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white" id="production-volume">1,247</div>
                            <div class="text-sm text-gray-500">tons</div>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Production Volume</h3>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-amber-500 to-orange-500 h-2 rounded-full" style="width: 92%"></div>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">Total production output</p>
                </div>

                <!-- Active Locations -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-3xl">📍</div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white" id="active-locations">24</div>
                            <div class="text-sm text-gray-500">locations</div>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Active Locations</h3>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-blue-500 to-cyan-500 h-2 rounded-full" style="width: 78%"></div>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">Operating facilities</p>
                </div>

                <!-- Social Impact -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-3xl">🤝</div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-gray-900 dark:text-white" id="social-impact">8,543</div>
                            <div class="text-sm text-gray-500">beneficiaries</div>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Social Impact</h3>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-purple-500 to-pink-500 h-2 rounded-full" style="width: 67%"></div>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">Community beneficiaries</p>
                </div>
            </div>

            <!-- PBI-FE-9.1: Global Production Trend Analysis -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 mb-8 border border-gray-100 dark:border-gray-700">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Global Production Trend Analysis</h2>
                    </div>
                    <div class="text-4xl">📈</div>
                </div>
                <div class="mb-6">
                    <select id="production-timeframe" class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="7d">Last 7 days</option>
                        <option value="30d" selected>Last 30 days</option>
                        <option value="90d">Last 90 days</option>
                        <option value="1y">Last year</option>
                    </select>
                </div>
                <div class="h-80">
                    <canvas id="productionTrendChart"></canvas>
                </div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-4">
                    Data sourced from data warehouse aggregations. Read-only dashboard for performance monitoring.
                </p>
            </div>

            <!-- PBI-FE-9.2: Revenue per Location Dashboard -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Revenue per Location</h2>
                        <div class="text-4xl">💰</div>
                    </div>
                    <div class="h-64">
                        <canvas id="revenueLocationChart"></canvas>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-4">
                        Data consistent with transaction records from database VIEW.
                    </p>
                </div>

                <!-- Revenue Table -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Revenue Breakdown</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Location</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Revenue</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Growth</th>
                                </tr>
                            </thead>
                            <tbody id="revenue-table-body" class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                <!-- Revenue data will be populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- PBI-FE-9.3: Most Productive Plant Analysis -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 mb-8 border border-gray-100 dark:border-gray-700">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Most Productive Plant Analysis</h2>
                    <div class="text-4xl">🏆</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div id="top-plants-list" class="md:col-span-2">
                        <!-- Top plants will be populated by JavaScript -->
                    </div>
                    <div class="h-64">
                        <canvas id="productivityChart"></canvas>
                    </div>
                </div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-4">
                    Calculation based on harvest data from data warehouse aggregations. Read-only analysis.
                </p>
            </div>

            <!-- PBI-FE-9.4: Social Distribution Insight -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 mb-8 border border-gray-100 dark:border-gray-700">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Social Distribution Insight</h2>
                    <div class="text-4xl">🌍</div>
                </div>
                <div class="mb-6">
                    <div class="flex space-x-4">
                        <select id="social-period" class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="monthly" selected>Monthly</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                        <select id="social-location" class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="all" selected>All Locations</option>
                            <option value="california">California</option>
                            <option value="florida">Florida</option>
                            <option value="texas">Texas</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="h-64">
                        <canvas id="socialDistributionChart"></canvas>
                    </div>
                    <div class="space-y-4">
                        <div id="social-metrics">
                            <!-- Social metrics will be populated by JavaScript -->
                        </div>
                    </div>
                </div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-4">
                    Data consistent with donation transaction records from database VIEW.
                </p>
            </div>

            <!-- PBI-FE-9.5: Export Analytics Report -->
            <div id="export" class="bg-gradient-to-r from-purple-600 to-indigo-600 rounded-2xl p-8 text-white">
                <div class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Export Analytics Report</h2>
                    <p class="text-lg text-purple-100 max-w-2xl mx-auto">
                        Generate comprehensive reports for documentation and decision-making purposes.
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                        <h3 class="text-xl font-semibold text-white mb-6">Report Configuration</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-purple-100 mb-2">Report Type</label>
                                <select id="report-type" class="w-full px-4 py-3 rounded-xl border-2 border-purple-300 focus:border-white bg-white/20 text-white placeholder-purple-200 focus:outline-none transition-colors duration-200">
                                    <option value="production" class="text-gray-900">Production Analysis</option>
                                    <option value="revenue" class="text-gray-900">Revenue Report</option>
                                    <option value="social" class="text-gray-900">Social Impact</option>
                                    <option value="comprehensive" class="text-gray-900">Comprehensive Dashboard</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-purple-100 mb-2">Time Period</label>
                                <select id="report-period" class="w-full px-4 py-3 rounded-xl border-2 border-purple-300 focus:border-white bg-white/20 text-white placeholder-purple-200 focus:outline-none transition-colors duration-200">
                                    <option value="7d" class="text-gray-900">Last 7 days</option>
                                    <option value="30d" class="text-gray-900">Last 30 days</option>
                                    <option value="90d" class="text-gray-900">Last 90 days</option>
                                    <option value="1y" class="text-gray-900">Last year</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="checkbox" id="include-charts" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-purple-300 rounded" checked>
                                    <span class="ml-2 text-sm text-purple-100">Include Charts</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" id="include-tables" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-purple-300 rounded" checked>
                                    <span class="ml-2 text-sm text-purple-100">Include Tables</span>
                                </label>
                            </div>
                            <div class="flex space-x-4">
                                <button onclick="exportReport('pdf')" class="border-2 border-white text-white hover:bg-white hover:text-purple-600 font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105">
                                    Export PDF
                                </button>
                                <button onclick="exportReport('csv')" class="border-2 border-white text-white hover:bg-white hover:text-purple-600 font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105">
                                    Export CSV
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Mock analytics data - frontend only
        function getProductionTrendData(timeframe = '30d') {
            const data = [];
            const now = new Date();
            let days;

            switch(timeframe) {
                case '7d': days = 7; break;
                case '30d': days = 30; break;
                case '90d': days = 90; break;
                case '1y': days = 365; break;
                default: days = 30;
            }

            for (let i = days - 1; i >= 0; i--) {
                const date = new Date(now);
                date.setDate(date.getDate() - i);
                data.push({
                    date: date.toISOString().split('T')[0],
                    production: 800 + Math.random() * 400 + Math.sin(i / 10) * 200,
                    target: 1000
                });
            }
            return data;
        }

        function getRevenueLocationData() {
            return [
                { location: 'California, USA', revenue: 850000, percentage: 35.4 },
                { location: 'Florida, USA', revenue: 620000, percentage: 25.8 },
                { location: 'Texas, USA', revenue: 480000, percentage: 20.0 },
                { location: 'Arizona, USA', revenue: 280000, percentage: 11.7 },
                { location: 'Others', revenue: 170000, percentage: 7.1 }
            ];
        }

        function getTopPlantsData() {
            return [
                { name: 'Hydroponic Lettuce A1', production: 1250, unit: 'kg', efficiency: 95 },
                { name: 'Organic Tomato Farm', production: 980, unit: 'kg', efficiency: 88 },
                { name: 'Basil Cultivation Unit', production: 750, unit: 'kg', efficiency: 92 },
                { name: 'Spinach Hydro System', production: 680, unit: 'kg', efficiency: 87 },
                { name: 'Strawberry Vertical Farm', production: 520, unit: 'kg', efficiency: 78 }
            ];
        }

        function getSocialDistributionData() {
            return {
                donations: 45000,
                beneficiaries: 1250,
                programs: ['Food Aid', 'Education Support', 'Agricultural Training', 'Community Development'],
                distribution: [
                    { category: 'Food Aid', amount: 18000, beneficiaries: 500 },
                    { category: 'Education', amount: 12000, beneficiaries: 300 },
                    { category: 'Training', amount: 10000, beneficiaries: 250 },
                    { category: 'Development', amount: 5000, beneficiaries: 200 }
                ]
            };
        }

        // Initialize dashboard
        document.addEventListener('DOMContentLoaded', function() {
            initializeAnalyticsDashboard();
        });

        function initializeAnalyticsDashboard() {
            // Production Trend Chart
            updateProductionChart('30d');

            // Revenue Location Chart
            const revenueCtx = document.getElementById('revenueLocationChart').getContext('2d');
            const revenueData = getRevenueLocationData();

            new Chart(revenueCtx, {
                type: 'doughnut',
                data: {
                    labels: revenueData.map(d => d.location),
                    datasets: [{
                        data: revenueData.map(d => d.revenue),
                        backgroundColor: [
                            'rgb(34, 197, 94)',
                            'rgb(59, 130, 246)',
                            'rgb(239, 68, 68)',
                            'rgb(245, 158, 11)',
                            'rgb(139, 92, 246)'
                        ],
                        borderWidth: 2,
                        borderColor: 'white'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const value = context.parsed;
                                    const percentage = revenueData[context.dataIndex].percentage;
                                    return `$${value.toLocaleString()} (${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });

            // Populate revenue table
            populateRevenueTable(revenueData);

            // Top Plants List and Chart
            const topPlants = getTopPlantsData();
            populateTopPlants(topPlants);

            const productivityCtx = document.getElementById('productivityChart').getContext('2d');
            new Chart(productivityCtx, {
                type: 'bar',
                data: {
                    labels: topPlants.map(p => p.name.split(' ')[0] + ' ' + p.name.split(' ')[1]),
                    datasets: [{
                        label: 'Production (kg)',
                        data: topPlants.map(p => p.production),
                        backgroundColor: 'rgba(34, 197, 94, 0.8)',
                        borderColor: 'rgb(34, 197, 94)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
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

            // Social Distribution Chart
            updateSocialChart();

            // Event listeners
            document.getElementById('production-timeframe').addEventListener('change', function(e) {
                updateProductionChart(e.target.value);
            });

            document.getElementById('social-period').addEventListener('change', updateSocialChart);
            document.getElementById('social-location').addEventListener('change', updateSocialChart);
        }

        function updateProductionChart(timeframe) {
            const productionData = getProductionTrendData(timeframe);
            const ctx = document.getElementById('productionTrendChart');

            // Destroy existing chart if it exists
            if (window.productionChart) {
                window.productionChart.destroy();
            }

            window.productionChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: productionData.map(d => {
                        const date = new Date(d.date);
                        return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
                    }),
                    datasets: [
                        {
                            label: 'Actual Production',
                            data: productionData.map(d => d.production),
                            borderColor: 'rgb(34, 197, 94)',
                            backgroundColor: 'rgba(34, 197, 94, 0.1)',
                            tension: 0.4,
                            fill: true,
                            pointBackgroundColor: 'rgb(34, 197, 94)',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            pointHoverRadius: 6
                        },
                        {
                            label: 'Target',
                            data: productionData.map(d => d.target),
                            borderColor: 'rgb(239, 68, 68)',
                            backgroundColor: 'transparent',
                            borderDash: [5, 5],
                            tension: 0.4,
                            pointBackgroundColor: 'rgb(239, 68, 68)',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 3
                        }
                    ]
                },
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
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            },
                            title: {
                                display: true,
                                text: 'Production Volume (kg)'
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
        }

        function populateRevenueTable(data) {
            const tbody = document.getElementById('revenue-table-body');
            tbody.innerHTML = '';

            data.forEach(item => {
                const row = document.createElement('tr');
                const growth = Math.random() > 0.5 ? '+' : '-';
                const growthValue = (Math.random() * 15).toFixed(1);

                row.innerHTML = `
                    <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-white">${item.location}</td>
                    <td class="px-4 py-3 text-sm text-gray-900 dark:text-white">$${item.revenue.toLocaleString()}</td>
                    <td class="px-4 py-3 text-sm ${growth === '+' ? 'text-green-600' : 'text-red-600'}">${growth}${growthValue}%</td>
                `;
                tbody.appendChild(row);
            });
        }

        function populateTopPlants(data) {
            const container = document.getElementById('top-plants-list');
            container.innerHTML = '';

            data.forEach((plant, index) => {
                const plantCard = document.createElement('div');
                plantCard.className = 'bg-gradient-to-r from-green-50 to-emerald-50 dark:from-gray-700 dark:to-gray-600 rounded-xl p-6 mb-4 border border-gray-200 dark:border-gray-600';

                plantCard.innerHTML = `
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-bold">
                                ${index + 1}
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">${plant.name}</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">${plant.production} ${plant.unit} produced</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-green-600">${plant.efficiency}%</div>
                            <div class="text-sm text-gray-500">Efficiency</div>
                        </div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-500 h-2 rounded-full" style="width: ${plant.efficiency}%"></div>
                    </div>
                `;

                container.appendChild(plantCard);
            });
        }

        function updateSocialChart() {
            const socialData = getSocialDistributionData();
            const ctx = document.getElementById('socialDistributionChart');

            // Destroy existing chart if it exists
            if (window.socialChart) {
                window.socialChart.destroy();
            }

            window.socialChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: socialData.distribution.map(d => d.category),
                    datasets: [{
                        data: socialData.distribution.map(d => d.amount),
                        backgroundColor: [
                            'rgb(34, 197, 94)',
                            'rgb(59, 130, 246)',
                            'rgb(239, 68, 68)',
                            'rgb(245, 158, 11)'
                        ],
                        borderWidth: 2,
                        borderColor: 'white'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const value = context.parsed;
                                    return `$${value.toLocaleString()}`;
                                }
                            }
                        }
                    }
                }
            });

            // Update social metrics
            updateSocialMetrics(socialData);
        }

        function updateSocialMetrics(data) {
            const container = document.getElementById('social-metrics');
            container.innerHTML = '';

            const metrics = [
                { label: 'Total Donations', value: `$${data.donations.toLocaleString()}`, icon: '💰' },
                { label: 'Beneficiaries', value: data.beneficiaries.toLocaleString(), icon: '👥' },
                { label: 'Programs', value: data.programs.length, icon: '📋' },
                { label: 'Avg per Beneficiary', value: `$${(data.donations / data.beneficiaries).toFixed(0)}`, icon: '📊' }
            ];

            metrics.forEach(metric => {
                const metricDiv = document.createElement('div');
                metricDiv.className = 'bg-white/10 backdrop-blur-sm rounded-xl p-4';
                metricDiv.innerHTML = `
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-purple-100">${metric.label}</p>
                            <p class="text-2xl font-bold text-white">${metric.value}</p>
                        </div>
                        <div class="text-3xl">${metric.icon}</div>
                    </div>
                `;
                container.appendChild(metricDiv);
            });
        }

        // Export functions
        function exportReport(format) {
            const reportType = document.getElementById('report-type').value;
            const period = document.getElementById('report-period').value;
            const includeCharts = document.getElementById('include-charts').checked;
            const includeTables = document.getElementById('include-tables').checked;

            // Simulate export process
            alert(`Exporting ${reportType} report for ${period} in ${format.toUpperCase()} format...\n\nCharts: ${includeCharts ? 'Included' : 'Excluded'}\nTables: ${includeTables ? 'Included' : 'Excluded'}\n\nThis is a frontend simulation. In a real application, this would generate and download the actual report.`);

            // In a real implementation, this would:
            // 1. Gather all dashboard data
            // 2. Generate PDF or CSV
            // 3. Trigger download
        }

        // Utility functions
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
</body>
</html>
