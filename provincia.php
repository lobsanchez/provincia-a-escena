<?php require_once("assets/config/config.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]> 		<html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]> 		<html class="ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9]> 		<html class="ie9 no-js" lang="es"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <meta name="author" content="Luis Óscar Bueno Sánchez">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Proyecto final DIW - Provincia a escena">   
      <title>Provincia a escena </title>    
      <link rel="stylesheet" href="assets/css/dist/output.css" type="text/css"/>
      <link rel="dns-prefetch" href="//unpkg.com" />
                <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

                <style>
                    [x-cloak] {
                        display: none;
                    }
                </style>   
   </head>
   <body class="font-roboto" id="top">
        <?php include("assets/templates/header.php"); ?>   	
        <main>
          <section class="py-16 mx-auto text-right hero bg-black">
            <h2 class="xl:text-[160px] lg:text-[120px] text-[60px] px-16 leading-tight font-anton text-white animate-fade-right animate-once animate-duration-700 animate-ease-linear"><span>PROGRAMACIÓN FESTIVAL FAMILIAR DE ARTES ESCÉNICAS</span></h2> 
          </section>
          <section class="lg:flex flex-wrap bg-black justify-center pb-16">
                
                <div class="pt-12 px-12 link_village">
                    <!-- <div class="w-[424px] h-[400px] bg-[#343363] text-center text-6xl text-white align-middle hover:text-[#343363] hover:bg-[url('../../images/sanctispiritus_foto_bn.jpg')]">SANCTI SPIRITUS</div> -->
                    <a href="teatro-poniente.php"><img class="hover:bg-"src="assets/images/sancti_spiritus_mini.jpg"></a> 
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/lumbrales_mini.jpg">
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/villoria_mini.jpg"> 
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/macotera_mini.jpg">
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/aldeadavila_de_la_ribera_mini.jpg">
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/alba_de_tormes_mini.jpg">
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/monleras_mini.jpg">
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/doñinos_de_salamanca_mini.jpg">
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/sequeros_mini.jpg">
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/guijuelo_mini.jpg">
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/vitigudino_mini.jpg"> 
                </div>
                <div class="pt-12 px-12 link_village">
                    <img src="assets/images/ledesma_mini.jpg">
                </div>         
          </section>
         
          <section class="">        
            <div class="pt-16 px-16">
                <h2 id="calendario" class="inline-block xl:text-[120px] lg:text-[100px] text-[60px] px-16 leading-tight font-anton animate-fade animate-once animate-duration-1000 animate-ease-linear"><span>CALENDARIO</span></h2>
                <div class="inline-block  float-end"><a href="#top"><img class="h-28 animate-jump animate-once animate-duration-700 animate-delay-700 animate-ease-linear" src="assets/images/flecha-arriba.png"></a></div> 
            </div>
            <!-- component -->
            <!-- This is an example component -->
            <div>
               

                <div class="antialiased sans-serif bg-white h-screen">
                <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                    <div class="container mx-auto px-4 py-2 md:py-20">
                        
                        <!-- <div class="font-bold text-gray-800 text-xl mb-4">
                            Schedule Tasks
                        </div> -->

                        <div class="bg-gray-200  shadow overflow-hidden">

                            <div class="flex items-center justify-between py-2 px-6">
                                <div>
                                    <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                    <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                </div>
                                <div class="border rounded-lg px-1" style="padding-top: 2px;">
                                    <button 
                                        type="button"
                                        class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center" 
                                        :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                        :disabled="month == 0 ? true : false"
                                        @click="month--; getNoOfDays()">
                                        <svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                        </svg>  
                                    </button>
                                    <div class="border-r inline-flex h-6"></div>		
                                    <button 
                                        type="button"
                                        class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1" 
                                        :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                        :disabled="month == 11 ? true : false"
                                        @click="month++; getNoOfDays()">
                                        <svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>									  
                                    </button>
                                </div>
                            </div>	

                            <div class="-mx-1 -mb-1">
                                <div class="flex flex-wrap" style="margin-bottom: -40px;">
                                    <template x-for="(day, index) in DAYS" :key="index">	
                                        <div style="width: 14.26%" class="px-2 py-2">
                                            <div
                                                x-text="day" 
                                                class="text-gray-600 text-sm uppercase tracking-wide font-bold text-center"></div>
                                        </div>
                                    </template>
                                </div>

                                <div class="flex flex-wrap border-t border-l">
                                    <template x-for="blankday in blankdays">
                                        <div 
                                            style="width: 14.28%; height: 120px"
                                            class="text-center border-r border-b px-4 pt-2"	
                                        ></div>
                                    </template>	
                                    <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                                        <div style="width: 14.28%; height: 120px" class="px-4 pt-2 border-r border-b relative">
                                            <div
                                                @click="showEventModal(date)"
                                                x-text="date"
                                                class="inline-flex w-6 h-6 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100"
                                                :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
                                            ></div>
                                            <div style="height: 80px;" class="overflow-y-auto mt-1">
                                                <!-- <div 
                                                    class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none"
                                                    x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
                                                    x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

                                                <template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">	
                                                    <div
                                                        class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
                                                        :class="{
                                                            'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
                                                            'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
                                                            'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
                                                            'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
                                                            'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
                                                        }"
                                                    >
                                                        <p x-text="event.event_title" class="text-sm truncate leading-tight"></p>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openEventModal">
                        <div class="p-4 max-w-xl mx-auto  absolute left-0 right-0 overflow-hidden mt-24">
                            <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                                x-on:click="openEventModal = !openEventModal">
                                <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                                </svg>
                            </div>

                            <div class="shadow w-full rounded-lg bg-white overflow-hiddenblock p-8">
                                
                                <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Add Event Details</h2>
                            
                                <div class="mb-4">
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event title</label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_title">
                                </div>

                                <div class="mb-4">
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event date</label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_date" readonly>
                                </div>

                                <div class="inline-block w-64 mb-4">
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Select a theme</label>
                                    <div class="relative">
                                        <select @change="event_theme = $event.target.value;" x-model="event_theme" class="block appearance-none w-full bg-gray-200 border-2 border-gray-200 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-blue-500 text-gray-700">
                                                <template x-for="(theme, index) in themes">
                                                    <option :value="theme.value" x-text="theme.label"></option>
                                                </template>
                                            
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8 text-right">
                                    <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="openEventModal = !openEventModal">
                                        Cancel
                                    </button>	
                                    <button type="button" class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm" @click="addEvent()">
                                        Save Event
                                    </button>	
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->
                </div>

                <script>
                    const MONTH_NAMES = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                    const DAYS = ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'];

                    function app() {
                        return {
                            month: '',
                            year: '',
                            no_of_days: [],
                            blankdays: [],
                            days: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],

                            events: [
                                {
                                    event_date: new Date(2024, 0, 10),
                                    event_title: "Un día con el abuelo por Triguiñuelas",
                                    event_theme: 'blue'
                                },

                                {
                                    event_date: new Date(2024, 0, 17),
                                    event_title: "Batallitas por Jess Martin's",
                                    event_theme: 'red'
                                },

                                {
                                    event_date: new Date(2024, 0, 26),
                                    event_title: "Imagina por Óscar Escalante",
                                    event_theme: 'green'
                                }
                            ],
                            event_title: '',
                            event_date: '',
                            event_theme: 'blue',

                            themes: [
                                {
                                    value: "blue",
                                    label: "Blue Theme"
                                },
                                {
                                    value: "red",
                                    label: "Red Theme"
                                },
                                {
                                    value: "yellow",
                                    label: "Yellow Theme"
                                },
                                {
                                    value: "green",
                                    label: "Green Theme"
                                },
                                {
                                    value: "purple",
                                    label: "Purple Theme"
                                }
                            ],

                            openEventModal: false,

                            initDate() {
                                let today = new Date();
                                this.month = today.getMonth();
                                this.year = today.getFullYear();
                                this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                            },

                            isToday(date) {
                                const today = new Date();
                                const d = new Date(this.year, this.month, date);

                                return today.toDateString() === d.toDateString() ? true : false;
                            },

                            showEventModal(date) {
                                // open the modal
                                this.openEventModal = true;
                                this.event_date = new Date(this.year, this.month, date).toDateString();
                            },

                            addEvent() {
                                if (this.event_title == '') {
                                    return;
                                }

                                this.events.push({
                                    event_date: this.event_date,
                                    event_title: this.event_title,
                                    event_theme: this.event_theme
                                });

                                console.log(this.events);

                                // clear the form data
                                this.event_title = '';
                                this.event_date = '';
                                this.event_theme = 'blue';

                                //close the modal
                                this.openEventModal = false;
                            },

                            getNoOfDays() {
                                let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                                // find where to start calendar day of week
                                let dayOfWeek = new Date(this.year, this.month).getDay();
                                let blankdaysArray = [];
                                for ( var i=1; i <= dayOfWeek; i++) {
                                    blankdaysArray.push(i);
                                }

                                let daysArray = [];
                                for ( var i=1; i <= daysInMonth; i++) {
                                    daysArray.push(i);
                                }
                                
                                this.blankdays = blankdaysArray;
                                this.no_of_days = daysArray;
                            }
                        }
                    }
                </script>
            </div> 
          </section>
        </main>
        <?php include("assets/templates/footer.php"); ?> 
        <script src="assets/js/custom.js"></script>
   </body>   
</html>
