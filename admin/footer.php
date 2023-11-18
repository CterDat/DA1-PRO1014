<!-- footer -->
<div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                        <div class="container">
                          <!-- Footer Start -->
                          <footer
                            class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left "
                          >
                            &copy;
                            <script>
                              var year = new Date();document.write(year.getFullYear());
                            </script>
                            Robotech
                            <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block"
                              >Crafted with <i class="ti ti-heart text-red-500"></i> by
                              Mannatthemes</span
                            >
                          </footer>
                          <!-- end Footer -->
                        </div>
                      </div>
  
  
                </div><!--end container-->
            </div><!--end page-wrapper-->
        </div><!--end /div-->

        <!-- JAVASCRIPTS -->
        <!-- <div class="menu-overlay"></div> -->
        <script src="resouce/assets/libs/lucide/umd/lucide.min.js"></script>
        <script src="resouce/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="resouce/assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="resouce/assets/libs/%40frostui/tailwindcss/frostui.js"></script>

        <script src="resouce/assets/libs/filepond/filepond.min.js"></script>
        <script src="resouce/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
        <script src="resouce/assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
        <script src="resouce/assets/libs/mobius1-selectr/selectr.min.js"></script>
        <script src="resouce/assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
        <script>    
            FilePond.registerPlugin(FilePondPluginImagePreview);    
            // Get a reference to the file input element
            const inputElement = document.querySelectorAll('input[type="file"]');

            // Create a FilePond instance
            inputElement.forEach(element => {
                const pond = FilePond.create(element);    
            });
            

            var elem = document.querySelector('input[name="foo"]');
            new Datepicker(elem, {
            // ...options
            }); 
            new Selectr('#sizing',{
                taggable: true,
                tagSeperators: [",", "|"]
            });
        </script>
    </body>

<!-- Mirrored from mannatthemes.com/robotech/default/admin-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 15:34:24 GMT -->
</html>