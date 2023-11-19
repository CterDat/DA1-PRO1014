<div class="ltr:flex flex-1 rtl:flex-row-reverse">
            <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
                <div class="xl:w-full">        
                    <div class="flex flex-wrap">
                        <div class="flex items-center py-4 w-full">
                            <div class="w-full">                    
                                <div class="">
                                    <div class="flex flex-wrap justify-between">
                                        <div class="items-center ">
                                            <h1 class="font-medium text-3xl block dark:text-slate-100">Add Product</h1>
                                            <ol class="list-reset flex text-sm">
                                                <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Add Product</li>
                                            </ol>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly  required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end container-->
            
                <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
                    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">
                        <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                            <div class="w-full relative p-4"> 
                                <label for="hinh" class="font-medium text-sm text-slate-600 dark:text-slate-400">Upload Image</label>
                                <div class="w-full h-56 mx-auto  mb-4">
                                    <input type="file" name="hinh" class="filepond h-56" >                                    
                                </div>
                                
                            </div><!--end card-->                                  
                        </div><!--end col-->
                        
                        <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                        
                            <div class="w-full relative mb-4">  
                                <div class="flex-auto p-0 md:p-4">                                   
                                    <div class="mb-2">
                                    <label for="iddm" class="font-medium text-sm text-slate-600 dark:text-slate-400">Title</label>
                                    <select name="iddm" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" >
                                        
                                        
                                        <?php
                                          foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            echo '<option value="'.$id.'">'.$name.'</option> ';
                                          }
                                        ?>
                                        
                                      </select>
                                    </div>
                                    <div class="mb-2">
                                    <label for="tensp" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product</label>
                                    <input type="text" name="tensp" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Tên sản phẩm ...." require>
                                    </div>
                                    
                                    <div class="mb-2">
                                        <label for="mota" class="font-medium text-sm text-slate-600 dark:text-slate-400">Description</label>
                                        <textarea id="" rows="3" name="mota" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Mô tả ..."></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <div class="grid grid-cols-2 gap-3">
                                            
                                            <div class="col-span-1">
                                                <label for="giasp" class="font-medium text-sm text-slate-600 dark:text-slate-400">Price</label>
                                                <input type="title" name="giasp" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Giá sản phẩm ...." required>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="">
                                        <input type="submit" value="THÊM MỚI" name="themmoi" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">
                                        <input type="reset" class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">
                                        <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium"><a href="index.php?act=lissp">Danh sách</a></button>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->                                  
                        <!--end col-->
                        <?php
                        if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                        
                        ?>
                        </form>  
                        </div>
                        <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                            <div class="w-full relative mb-4">  
                                <div class="flex-auto p-0 md:p-4">                                   
                                    <div>
                                        <p class="text-slate-700 text-base dark:text-slate-400">Product Image</p>
                                        <img src="resouce/assets/images/products/pro-3.png" alt="" class="w-full h-auto">                                    
                                    </div>
                                    <div class="mb-5">
                                        <p class="text-slate-700 text-base dark:text-slate-400">Product Title</p>
                                        <h4 class="text-xl font-semibold text-slate-700 dark:text-slate-300">Rau củ quả</h4>
                                    </div>
                                    <div class="mb-5">
                                        <p class="text-slate-600 text-base dark:text-slate-400">Description</p>
                                        <h4 class="text-base font-medium text-slate-900 dark:text-slate-300">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
                                    </div>
                                    <div class="mb-5">
                                        <p class="text-slate-600 text-base dark:text-slate-400">Price</p>
                                        <h4 class="text-base font-semibold text-slate-900 dark:text-slate-300">5000000$</h4>
                                    </div>
                                    <div class="mb-5">
                                        <p class="text-slate-600 text-base dark:text-slate-400">Size</p>
                                        <h4 class="text-base font-semibold text-slate-900 dark:text-slate-300">SM, MD, LG, XL</h4>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->                                  
                        </div><!--end col-->
                                      
                </div> <!--end grid-->
