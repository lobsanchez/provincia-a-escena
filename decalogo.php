<?php require_once("assets/config/config.php"); 
$pagina=2; ?>
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
          <section class="py-16 mx-auto text-right bg-black hero">
            <h2 class="xl:text-[190px] lg:text-[140px] text-[60px] px-16 leading-tight font-anton text-white animate-fade-right animate-once animate-duration-700 animate-ease-linear"><span>DECÁLOGO DEL BUEN ESPECTADOR</span></h2> 
          </section>
          <section class="flex-wrap justify-center pb-16 bg-black lg:flex">
                
                <div class="px-6 pt-12 link_village">
                    <!-- <div class="w-[424px] h-[400px] bg-[#343363] text-center text-6xl text-white align-middle hover:text-[#343363] hover:bg-[url('../../images/sanctispiritus_foto_bn.jpg')]">SANCTI SPIRITUS</div> -->
                    <a href="sancti-spiritus.php"><img src="assets/images/sancti_spiritus_mini.jpg" class="w-[400px]"></a> 
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="lumbrales.php"><img src="assets/images/lumbrales_mini.jpg" class="w-[400px]"></a>
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="villoria.php"><img src="assets/images/villoria_mini.jpg" class="w-[400px]"></a> 
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="macotera.php"><img src="assets/images/macotera_mini.jpg" class="w-[400px]"></a>    
                </div>
                <div class="px-6 pt-12 link_village">
                <a href="aldeadavila.php"><img src="assets/images/aldeadavila_de_la_ribera_mini.jpg" class="w-[400px]"></a>
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="albadetormes.php"><img src="assets/images/alba_de_tormes_mini.jpg" class="w-[400px]"></a>
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="monleras.php"><img src="assets/images/monleras_mini.jpg" class="w-[400px]"></a>
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="doninos.php"><img src="assets/images/doñinos_de_salamanca_mini.jpg" class="w-[400px]"></a>
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="sequeros.php"><img src="assets/images/sequeros_mini.jpg" class="w-[400px]"></a>
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="guijuelo.php"><img src="assets/images/guijuelo_mini.jpg" class="w-[400px]"></a>
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="vitigudino.php"><img src="assets/images/vitigudino_mini.jpg" class="w-[400px]"></a> 
                </div>
                <div class="px-6 pt-12 link_village">
                    <a href="ledesma.php"><img src="assets/images/ledesma_mini.jpg" class="w-[400px]"></a>
                </div>         
          </section>
         
          <section <?php $pagina=3; ?> class="">        
            <div class="px-16 pt-16">
                <h2 id="calendario" class="inline-block xl:text-[120px] lg:text-[100px] text-[60px] px-16 leading-tight font-anton animate-fade animate-once animate-duration-1000 animate-ease-linear"><span>CALENDARIO</span></h2>
                <div class="inline-block float-end"><a href="#top"><img class="h-28 animate-jump animate-once animate-duration-700 animate-delay-700 animate-ease-linear" src="assets/images/flecha-arriba.png"></a></div> 
            </div>
            <!-- component -->
            <!-- This is an example component -->
            <div>
               

                <div class="h-screen antialiased bg-white sans-serif">
                <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                    <div class="container px-4 py-2 mx-auto md:py-20">
                        
                        <!-- <div class="mb-4 text-xl font-bold text-gray-800">
                            Schedule Tasks
                        </div> -->

                        <div class="overflow-hidden bg-gray-200 shadow">

                            <div class="flex items-center justify-between px-6 py-2">
                                <div>
                                    <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                    <span x-text="year" class="ml-1 text-lg font-normal text-gray-600"></span>
                                </div>
                                <div class="px-1 border rounded-lg" style="padding-top: 2px;">
                                    <button 
                                        type="button"
                                        class="inline-flex items-center p-1 leading-none transition duration-100 ease-in-out rounded-lg cursor-pointer hover:bg-gray-200" 
                                        :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                        :disabled="month == 0 ? true : false"
                                        @click="month--; getNoOfDays()">
                                        <svg class="inline-flex w-6 h-6 leading-none text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                        </svg>  
                                    </button>
                                    <div class="inline-flex h-6 border-r"></div>		
                                    <button 
                                        type="button"
                                        class="inline-flex items-center p-1 leading-none transition duration-100 ease-in-out rounded-lg cursor-pointer hover:bg-gray-200" 
                                        :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                        :disabled="month == 11 ? true : false"
                                        @click="month++; getNoOfDays()">
                                        <svg class="inline-flex w-6 h-6 leading-none text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                                                class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase"></div>
                                        </div>
                                    </template>
                                </div>

                                <div class="flex flex-wrap border-t border-l">
                                    <template x-for="blankday in blankdays">
                                        <div 
                                            style="width: 14.28%; height: 120px"
                                            class="px-4 pt-2 text-center border-b border-r"	
                                        ></div>
                                    </template>	
                                    <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                                        <div style="width: 14.28%; height: 120px" class="relative px-4 pt-2 border-b border-r">
                                            <div
                                                @click="showEventModal(date)"
                                                x-text="date"
                                                class="inline-flex items-center justify-center w-6 h-6 leading-none text-center transition duration-100 ease-in-out rounded-full cursor-pointer"
                                                :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
                                            ></div>
                                            <div style="height: 80px;" class="mt-1 overflow-y-auto">
                                                <!-- <div 
                                                    class="absolute top-0 right-0 inline-flex items-center justify-center w-6 h-6 mt-2 mr-2 text-sm leading-none text-white bg-gray-700 rounded-full"
                                                    x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
                                                    x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

                                                <template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">	
                                                    <div
                                                        class="px-2 py-1 mt-1 overflow-hidden border rounded-lg"
                                                        :class="{
                                                            'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
                                                            'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
                                                            'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
                                                            'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
                                                            'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
                                                        }"
                                                    >
                                                        <p x-text="event.event_title" class="text-sm leading-tight truncate"></p>
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
                    <div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed top-0 bottom-0 left-0 right-0 z-40 w-full h-full" x-show.transition.opacity="openEventModal">
                        <div class="absolute left-0 right-0 max-w-xl p-4 mx-auto mt-24 overflow-hidden">
                            <div class="absolute top-0 right-0 inline-flex items-center justify-center w-10 h-10 text-gray-500 bg-white rounded-full shadow cursor-pointer hover:text-gray-800"
                                x-on:click="openEventModal = !openEventModal">
                                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                                </svg>
                            </div>

                            <div class="w-full p-8 bg-white rounded-lg shadow overflow-hiddenblock">
                                
                                <h2 class="pb-2 mb-6 text-2xl font-bold text-gray-800 border-b">Add Event Details</h2>
                            
                                <div class="mb-4">
                                    <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Event title</label>
                                    <input class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_title">
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Event date</label>
                                    <input class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_date" readonly>
                                </div>

                                <div class="inline-block w-64 mb-4">
                                    <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Select a theme</label>
                                    <div class="relative">
                                        <select @change="event_theme = $event.target.value;" x-model="event_theme" class="block w-full px-4 py-2 pr-8 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none hover:border-gray-500 focus:outline-none focus:bg-white focus:border-blue-500">
                                                <template x-for="(theme, index) in themes">
                                                    <option :value="theme.value" x-text="theme.label"></option>
                                                </template>
                                            
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8 text-right">
                                    <button type="button" class="px-4 py-2 mr-2 font-semibold text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100" @click="openEventModal = !openEventModal">
                                        Cancel
                                    </button>	
                                    <button type="button" class="px-4 py-2 font-semibold text-white bg-gray-800 border border-gray-700 rounded-lg shadow-sm hover:bg-gray-700" @click="addEvent()">
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