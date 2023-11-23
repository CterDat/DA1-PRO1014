<?php
    if (is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh = "<img src='".$hinhpath."' height='80'";
    }else{
        $hinh="no photo";
    }
?>

<div class="ltr:flex flex-1 rtl:flex-row-reverse">
            <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
                <div class="xl:w-full">        
                    <div class="flex flex-wrap">
                        <div class="flex items-center py-4 w-full">
                            <div class="w-full">                    
                                <div class="">
                                    <div class="flex flex-wrap justify-between">
                                        <div class="items-center ">
                                            <h1 class="font-medium text-3xl block dark:text-slate-100">Update Product</h1>
                                            <ol class="list-reset flex text-sm">
                                                <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Update Product</li>
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
                    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <!-- <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">  -->
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                            
                        <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                            <div class="w-full relative mb-4">  
                                <div class="flex-auto p-0 md:p-4">                                 
                                <div class="mb-2">
                                    <label for="iddm" class="font-medium text-sm text-slate-600 dark:text-slate-400">Title</label> 
                                    <select name="iddm" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                        <option value="0" selected>Tất cả</option>
                                        <?php 
                                            foreach ($listdanhmuc as $danhmuc) {
                                                if($iddm==$danhmuc['id']) $s="selected"; else $s="";
                                                echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option> ';
                                            }
                                        ?>   
                                    </select>  
                                    </div>
                                    <div class="mb-2">
                                    <label for="tensp" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product</label>
                                    <input type="text" name="tensp" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="<?=$name?>">
                                    </div>
                                    <div class="mb-2" >
                                        <label for="tensp" class="font-medium text-sm text-slate-600 dark:text-slate-400">Picture</label><br>
                                        <input type="file" name="hinh">
                                        <?=$hinh?>
                                    </div>
                                    <div class="mb-2">
                                        <label for="mota" class="font-medium text-sm text-slate-600 dark:text-slate-400">Description</label>
                                        <textarea id="" rows="3" name="mota" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"><?=$mota?></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <div class="grid grid-cols-2 gap-3">
                                            
                                            <div class="col-span-1">
                                                <label for="giasp" class="font-medium text-sm text-slate-600 dark:text-slate-400">Price</label>
                                                <input type="title" name="giasp" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" value="<?=$price?>">
                                            </div>
                                        </div>
                                    </div> 




                                    <div class="">
                                        <input type="hidden" name="id" value="<?=$id?>">
                                        <input type="submit" value="Cập nhật" name="capnhat" class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">
                                        <input type="reset" value="Nhập Lại" class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium"><a href="index.php?act=addsp">
                                        <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium"><a href="index.php?act=lissp">Danh Sách</a></button>
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
                        
                                      
</div> <!--end grid-->
