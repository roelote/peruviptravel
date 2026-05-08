<?php

/** * Template Name: Page Plan Your Trip */

/**
 * @package peruviptravel
 */

get_header();
?>

<?php
$image = get_field('slider');
if (!empty($image)) :
  $size = 'slider';
  $thumb = $image['sizes'][$size];
endif;
?>

<section class="flex items-center justify-center relative" style="height: 450px;background-image:url(<?php echo $thumb; ?>);">
  <div class="absolute top-0 bottom-0 w-full bg-black bg-opacity-40"></div>
  <div class="text-center z-40">
    <?php the_title('<h1 class="block font-raleway text-4xl text-white mb-5 font-bold uppercase">', '</h1>'); ?>
  </div>
</section>

<section class="px-5">
  <div class="container max-w-6xl">
    <main id="primary" class="plan homes">

      <?php
      while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'page');
      endwhile; // End of the loop.
      ?>
    </main><!-- #main -->
  </div>
</section>

<section class="my-10">
  <div class="container max-w-6xl">
    <div class="form m-10">
      <div class="border border-gray-300 rounded shadow-xl p-5">
        <div class="flex flex-wrap overflow-hidden lg:-mx-1 xl:-mx-3">
          <div class="w-full overflow-hidden lg:my-1 lg:px-5 lg:w-full xl:my-3 xl:px-10 xl:w-1/2 relative vert">
            <span class="block text-xl font-raleway text-gray-900 font-medium mb-5">Personal Information:</span>

            <div class="relative z-0 mb-6 w-full">
              <input type="email" name="floating_email" id="floating_email" class="block  py-2.5 pb-1 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b  appearance-none  border-gray-400  focus:outline-none focus:ring-0 focus:border-peruvip-600 peer" placeholder=" " required="">
              <label class="peer-focus:font-medium absolute text-base text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-peruvip-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name: </label>
            </div>

            <div class="relative z-0 mb-6 w-full">
              <input type="email" name="floating_email" id="floating_email" class="block  py-2.5 pb-1 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b  appearance-none  border-gray-400  focus:outline-none focus:ring-0 focus:border-peruvip-600 peer" placeholder=" " required="">
              <label class="peer-focus:font-medium absolute text-base text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-peruvip-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email: </label>
            </div>

            <div class="relative z-0 mb-6 w-full">
              <input type="email" name="floating_email" id="floating_email" class="block  py-2.5 pb-1 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b  appearance-none  border-gray-400  focus:outline-none focus:ring-0 focus:border-peruvip-600 peer" placeholder=" " required="">
              <label class="peer-focus:font-medium absolute text-base text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-peruvip-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Whatsapp: </label>
            </div>

            <div class="relative z-0 mb-6 w-full">
              <input type="email" name="floating_email" id="floating_email" class="block  py-2.5 pb-1 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b  appearance-none  border-gray-400  focus:outline-none focus:ring-0 focus:border-peruvip-600 peer" placeholder=" " required="">
              <label class="peer-focus:font-medium absolute text-base text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-peruvip-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nationality: </label>
            </div>

            <div class="relative z-0 mb-6 w-full">

              <label class="text-gray-600 mb-1 block">How did your hear about us?</label>
              <select name="duration" id="duration" class="border appearance-none  border-gray-400 px-2 text-gray-600  focus:outline-none focus:ring-0 focus:border-peruvip-600 w-full bg-white">
                <option value="1">Referido por familia/amigo</option>
                <option value="1">Búsqueda en línea</option>
                <option value="1">Redes Sociales</option>
                <option value="1">Otro</option>
              </select>

            </div>

            <span class="block text-xl font-raleway text-gray-900 font-medium mb-3">Tell us more about your ideal trip:</span>

            <div class="grid grid-cols-4 gap-3 my-2">
              <div>
                <label class="text-gray-600 mb-1 block">Arrival Date</label>
                <input class="border appearance-none  border-gray-400  focus:outline-none focus:ring-0 focus:border-peruvip-600 text-gray-700 w-full" type="date">
              </div>
              <div>
                <label class="text-gray-600 mb-1 block">Deperture Day</label>
                <input class="border appearance-none  border-gray-400  focus:outline-none focus:ring-0 focus:border-peruvip-600 text-gray-700 w-full" type="date">
              </div>
              <div>
                <label class="text-gray-600 mb-1 block">N° Adults</label>
                <select name="duration" id="duration" class="border appearance-none  border-gray-400  focus:outline-none focus:ring-0 focus:border-peruvip-600 w-full bg-white">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="1">5</option>
                  <option value="1">6</option>
                  <option value="1">7</option>
                  <option value="1">8</option>
                  <option value="1">9</option>
                  <option value="1">10</option>
                  <option value="1">11</option>
                  <option value="1">12</option>
                  <option value="1">13</option>
                  <option value="1">14</option>
                  <option value="1">15</option>
                  <option value="1">16</option>
                  <option value="1">17</option>
                  <option value="1">18</option>
                  <option value="1">19</option>
                  <option value="1">20</option>
                </select>
              </div>
              <div>
                <label class="text-gray-600 mb-1 block">N° Children</label>
                <select name="duration" id="duration" class="border appearance-none  border-gray-400  focus:outline-none focus:ring-0 focus:border-peruvip-600 w-full bg-white">
                  <option value="1">0</option>
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="1">5</option>
                  <option value="1">6</option>
                  <option value="1">7</option>
                  <option value="1">8</option>
                  <option value="1">9</option>
                  <option value="1">10</option>


                </select>
              </div>
            </div>


            <div class="flex flex-wrap">
              <div class="w-full lg:w-1/2">
                <div>
                  <label class="text-gray-800 font-medium font-raleway mb-1 block my-3">Hotel category</label>
                  <div class="flex items-center">
                    <input checked id="default-radio-2" type="radio" value="b" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                    <label for="default-radio-2" class="text-base ml-2 font-medium text-gray-900">3 estrellas</label>
                  </div>
                  <div class="flex items-center">
                    <input id="default-radio-2" type="radio" value="b" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                    <label for="default-radio-2" class="text-base ml-2 font-medium text-gray-900">4 estrellas</label>
                  </div>
                  <div class="flex items-center">
                    <input id="default-radio-2" type="radio" value="b" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                    <label for="default-radio-2" class="text-base ml-2 font-medium text-gray-900">5 estrellas</label>
                  </div>
                  <div class="flex items-center">
                    <input id="default-radio-2" type="radio" value="b" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                    <label for="default-radio-2" class="text-base ml-2 font-medium text-gray-900">Boutique</label>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/2">
                <div>
                  <label class="text-gray-800 font-medium font-raleway mb-1 block my-3">Service Type</label>

                  <div class="flex items-center">
                    <input checked type="radio" value="a" name="service" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                    <label class="text-base ml-2 font-medium text-gray-900">Group tour</label>
                  </div>
                  <div class="flex items-center">
                    <input type="radio" value="a" name="service" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                    <label class="text-base ml-2 font-medium text-gray-900">Private tour</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full overflow-hidden lg:my-1 lg:px-5 lg:w-full xl:my-3 xl:px-10 xl:w-1/2">
            <span class="block text-xl font-raleway text-gray-900 font-medium mb-5">Destinations:</span>

            <div class="mb-5 grid grid-cols-3 gap-2">
              <div class="px-4">
                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checkbox" class=" text-base font-medium text-gray-900">Lima</label>
              </div>
              <div class="px-4">
                <input id="inline-2-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-2-checkbox" class=" text-base font-medium text-gray-900">Cusco</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Ica</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Nazca</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Ica</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Paracas</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Nazca</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Ica</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Paracas</label>
              </div>
              <div class="px-4 w-full col-span-3">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900 mb-2">Other Top Travel Destinations in Peru</label>
                <input type="text" class="px-2 border appearance-none border-gray-400 focus:outline-none focus:ring-0 focus:border-peruvip-600 text-gray-700 w-full">

              </div>
            </div>

            <span class="block text-xl font-raleway text-gray-900 font-medium mb-5">Tipo de Experiencia:</span>

            <div class="mb-5 grid grid-cols-3 gap-2">
              <div class="px-4">
                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checkbox" class=" text-base font-medium text-gray-900">Cultural</label>
              </div>
              <div class="px-4">
                <input id="inline-2-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-2-checkbox" class=" text-base font-medium text-gray-900">Adventure</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Trekking</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Luxury</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Wellnes</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Spiritual</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Vivencial</label>
              </div>
              <div class="px-4">
                <input id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                <label for="inline-checked-checkbox" class=" text-base font-medium text-gray-900">Otros</label>
              </div>
            </div>


            <label class="text-gray-800 font-medium  mb-2 block my-3 pl-3">Estimated budget per person:</label>
            <input type="text" class="mx-3 px-2 border appearance-none border-gray-400 focus:outline-none focus:ring-0 focus:border-peruvip-600 text-gray-700 w-full" placeholder="US$">


            <label class="text-gray-800 font-medium  mb-1 block my-3">Message:</label>
            <textarea name="" id="" class="mx-3 border appearance-none border-gray-400 focus:outline-none focus:ring-0 focus:border-peruvip-600 text-gray-700 w-full" cols="30" rows="5"></textarea>

            <div class="text-center">
              <a href="#" class="bg-peruvip-500 text-white px-10 py-2 inline-block mt-4 hover:bg-gray-700 transition delay-200 rounded-sm font-medium ">SEND REQUEST</a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <form>


    </form>

  </div>
</section>




<?php

get_footer();
