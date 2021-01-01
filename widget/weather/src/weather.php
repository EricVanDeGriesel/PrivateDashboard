<div class="col-12 my-3 " onload="getResults()">
    <div class="sights h-100 p-2 bg-dark rounded-30 shadow d-flex align-items-start ">
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="row">
                        <div class="col-6 temp weatherFont text-theme-higlight centerContent noUserSelect">
                        </div>
                        <div class="col-6 icon centerContent">
                        </div>
                    </div>
                    <div class="row text-theme-white">
                        <div class="col-md-12 weather text-center  extra-font bg-theme-dark">
                        </div>
                    </div>
                    <div class="row text-theme-white">
                        <div class="col-6  feels extra-font">
                        </div>
                        <div class="col-6  hi-low extra-font" style="text-align: right;">
                        </div>
                    </div>
                    <div class="row text-theme-white">
                        <div class="col-6  humidity extra-font">
                        </div>
                        <div class="col-6  windSpeed extra-font" style="text-align: right;">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 bg-theme-grey">
                    <div class="row">
                        <div class="col-md-12 text-theme-white extra-font bg-theme-dark" style="text-align: center;">
                            Stündliche Vorhersage
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 py-2">
                            <canvas class="" id="hourlyChart" width="300px" height="70px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 my-1 ">
    <div class="sights h-100 bg-dark rounded-30 shadow d-flex justify-content-center align-items-start">
        <div class="col-md-12 bg-theme-grey  rounded-30" id="test">
            <div class="row text-theme-white">

                <div class="col-2  p-0">
                    <p id="dailyHeaderSlot1" class="bg-theme-dark "
                        style="text-align: center;border-top-left-radius:10px ;"></p>
                    <div class="  px-0 text-center weekMain" id="weekMain1">
                        <div id="iconSlot1"></div>
                        <div id="bodySlot1"></div>
                    </div>
                    <div class=" px-0 text-center weekAlt " id="weekAlt1">
                        <div id="feels1"></div>
                        <div id="hilow1"></div>
                        <div id="hum1"></div>
                        <div style="visibility: hidden;"> aaa</div>
                    </div>
                </div>
                <div class="col-2 p-0">
                    <p id="dailyHeaderSlot2" class="bg-theme-dark" style="text-align: center;"></p>
                    <div class=" px-0 text-center weekMain" id="weekMain2">
                        <div id="iconSlot2"></div>
                        <div id="bodySlot2"></div>
                    </div>
                    <div class=" px-0 text-center weekAlt" id="weekAlt2">
                        <div id="feels2"></div>
                        <div id="hilow2"></div>
                        <div id="hum2"></div>
                        <div id="win2"></div>
                        <div style="visibility: hidden;"> aaa</div>
                    </div>
                </div>
                <div class="col-2  p-0">
                    <p id="dailyHeaderSlot3" class="bg-theme-dark" style="text-align: center;"></p>
                    <div class=" px-0 text-center weekMain" id="weekMain3">
                        <div id="iconSlot3"></div>
                        <div id="bodySlot3"></div>
                    </div>
                    <div class=" px-0 text-center weekAlt" id="weekAlt3">
                        <div id="feels3"></div>
                        <div id="hilow3"></div>
                        <div id="hum3"></div>
                        <div id="win3"></div>
                        <div style="visibility: hidden;"> aaa</div>
                    </div>
                </div>
                <div class="col-2  p-0">
                    <p id="dailyHeaderSlot4" class="bg-theme-dark" style="text-align: center;"></p>
                    <div class="  px-0 text-center weekMain" id="weekMain4">
                        <div id="iconSlot4"></div>
                        <div id="bodySlot4"></div>
                    </div>
                    <div class=" px-0 text-center weekAlt" id="weekAlt4">
                        <div id="feels4"></div>
                        <div id="hilow4"></div>
                        <div id="hum4"></div>
                        <div id="win4"></div>
                        <div style="visibility: hidden;"> aaa</div>
                    </div>
                </div>
                <div class="col-2  p-0">
                    <p id="dailyHeaderSlot5" class="bg-theme-dark" style="text-align: center;"></p>
                    <div class="   px-0 text-center weekMain" id="weekMain5">
                        <div id="iconSlot5"></div>
                        <div id="bodySlot5"></div>
                    </div>
                    <div class="  px-0 text-center weekAlt" id="weekAlt5">
                        <div id="feels5"></div>
                        <div id="hilow5"></div>
                        <div id="hum5"></div>
                        <div id="win5"></div>
                        <div style="visibility: hidden;"> aaa</div>
                    </div>
                </div>
                <div class="col-2 p-0">
                    <p id="dailyHeaderSlot6" class="bg-theme-dark noPad"
                        style="text-align: center;border-top-right-radius:10px ;"></p>
                    <div class="  px-0 text-center weekMain" id="weekMain6">
                        <div id="iconSlot6"></div>
                        <div id="bodySlot6"></div>
                    </div>
                    <div class=" px-0 text-center weekAlt" id="weekAlt6">
                        <div id="feels6"></div>
                        <div id="hilow6"></div>
                        <div id="hum6"></div>
                        <div id="win6"></div>
                        <div style="visibility: hidden;"> aaa</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>