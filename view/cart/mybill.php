<div class="flex-auto p-0 md:p-4">                                 
                                    <table class="table table-striped">
                                    <tr>
                                        <th scope="col">ID ORDER</th>
                                        <th scope="col">HỌ TÊN</th>
                                        <th scope="col">SĐT</th>
                                        <th scope="col">ĐỊA CHỈ</th>
                                        <th scope="col">TỔNG TIỀN</th>
                                        <th scope="col">PTTT(NHẬN HÀNG/CHUYỂN KHOẢN)</th>
                                        <th scope="col">NGÀY</th>
                                        <th scope="col">TRẠNG THÁI</th>
                                        <th scope="col"></th>
                                    </tr>
                                    <?php
                                        foreach ($listtbl as $tbl) {
                                            extract($tbl);
                                            $chitiet="index.php?act=chitiet&id=".$id_order;
                                            
                                            echo '<tr>
                                            <td>'.$id_order.'</td>
                                            <td>'.$hoten.'</td>
                                            <td>'.$sdt.'</td>
                                            <td>'.$diachi.'</td>
                                            <td>'.$tongtien.' <u>đ</u></td>
                                            <td>'.$pttt_text.'</td>
                                            <td>'.$ngaydathang.'</td>
                                            <td>'.$trangthai_text.'</td>
                                            <td><a href="'.$chitiet.'"> <input type="button" value="Chi tiết" class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium"></a></td>
                                        </tr>';
                                        }
                                    ?>
                                    
                                    </table>
                                </div><!--end card-body--> 
                                
                            </div><!--end card-->   