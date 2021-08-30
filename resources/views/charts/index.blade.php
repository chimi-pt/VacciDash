<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Charts') }}
        </h2>
    </x-slot>
    
    <div>
<<<<<<< Updated upstream
    <iframe title="[My Data: test 1]" aria-label="Interactive line chart" id="datawrapper-chart-VElAW" src="https://datawrapper.dwcdn.net/VElAW/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
</script>
    </div>    
=======
    <iframe src="https://ourworldindata.org/explorers/coronavirus-data-explorer?zoomToSelection=true&time=2020-03-01..latest&facet=none&pickerSort=asc&pickerMetric=location&Metric=Vaccine+doses&Interval=Cumulative&Relative+to+Population=true&Align+outbreaks=false&country=~KEN&hideControls=true" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
    </div> 
    <div class="mt-8">
    <iframe src="https://ourworldindata.org/explorers/coronavirus-data-explorer?zoomToSelection=true&facet=none&pickerSort=desc&pickerMetric=population&hideControls=true&Metric=People+vaccinated+%28by+dose%29&Interval=Cumulative&Relative+to+Population=true&Align+outbreaks=false&country=~KEN" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
    </div> 
    <div class="mt-8">
    <iframe src="https://ourworldindata.org/explorers/coronavirus-data-explorer?zoomToSelection=true&facet=none&pickerSort=desc&pickerMetric=population&hideControls=true&Metric=People+vaccinated+%28by+dose%29&Interval=Cumulative&Relative+to+Population=false&Align+outbreaks=false&country=~KEN" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
    </div>   
    <div class="mt-8">
    <iframe src="https://ourworldindata.org/grapher/daily-covid-vaccination-doses-per-capita?country=~KEN" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
    </div>
    
>>>>>>> Stashed changes
   
</x-app-layout>
