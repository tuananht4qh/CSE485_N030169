 
            <div id="page" >
 <?php 
        include('connect.php');
        
         if(isset($_POST['btn_search']))
        {
          if($_POST['search_keywords'] =="" && $_POST['search_gv'] =="")
          {
             echo '<script language="javascript">
                 alert("Vui lòng nhập thông tin tìm kiếm");';
                 echo "location.href='khoahoc.php';
                 </script>";
                 exit;
          }
          else
          {
            $search_keywords=$_POST['search_keywords'];
                 $search_gv=$_POST['search_gv'];
          }
         
            

          if($search_keywords)
          {
               $sql_tk = "SELECT * FROM khoahoc where ten_kh LIKE '$search_keywords%' or noidungkh LIKE '%$search_keywords'";
              

         
              $kq_tk=mysqli_query($conn,$sql_tk);
              ?>
              <header id="headerloai" style ="font-size: 25px">
                <a title="<?php echo $search_keywords ?>">Từ khóa cần tìm là : <?php echo $search_keywords ?></a> 
             </header>
            <?php  

                if(mysqli_num_rows($kq_tk)!="")
                {
              
                    while($row=mysqli_fetch_array($kq_tk))
                    {?>
                           <div id="khoahoc">
                            <h1>Khóa Học</h1>
                            <div class="col-lg-12" style="background: #eeeeee; margin-bottom: 20px;">
                              <p>
                                I have gained experience teaching the following courses:
                              </p>
                              <div class="row">
                                <ul>
                                  <li>Teaching Assitant
                                   
                                    <ul>
                                      <li><?php echo $row['ten_kh']?></li>
                                    </ul>
                                    <?php echo $row['noidungkh']?>
                                 
                                  </li>
                                
                                </ul>

                                </div>
                              </div>
                            </div>     
                                                        
                      <?php  
                      
                    }
               }else
                {
                ?>
                     <div class="kq_tk">
                     Không tìm thấy kết quả phù hợp
                     </div>
                     <?php 

                 
                }  
              }
              // tim kiesm theo gv
              // if($_POST['search_gv'] =="")
              //   {
              //      echo '<script language="javascript">
              //          alert("Vui lòng nhập thông tin tìm kiếm");';
              //          echo "location.href='khoahoc.php';
              //          </script>";
              //          exit;
              //   }
              //   else
              //   {
              //
              //   }
         
            

          if($search_gv)
          {
               $sql_tk1 = "SELECT * FROM giaovien where chuyennganh LIKE '%$search_gv%' or username LIKE '%$search_gv%'";
              

         
              $kq_tk1=mysqli_query($conn,$sql_tk1);
              ?>
              <header id="headerloai" style ="font-size: 25px">
                <a title="<?php echo $search_gv ?>">Từ khóa cần tìm là : <?php echo $search_gv ?></a> 
             </header>
            <?php  

                if(mysqli_num_rows($kq_tk1)!="")
                {
           ?>
                        <div id="giangvien">
                          <h1>Giảng Viên</h1>
                          
                            <?php 
                            while($row2=mysqli_fetch_array($kq_tk1))
                            {?>
                            <div class="col-lg-12" style="background: #eeeeee;">
                              <h4>Giảng Viên: <a href=""><?php echo $row2['username']?></a>
                                <img style="width: 34px;height: auto;display: inline;" src="images/new.gif" alt="">
                              </h4>
                              <p><?php echo $row2['Khoa']?></p>

                              <h4>Chuyên Ngành
                                <img style="width: 34px;height: auto;display: inline;" src="images/new.gif" alt="">
                              </h4>
                              <p>Chuyên Ngành<a href=""> <?php echo $row2['chuyennganh']?></a> tại Đại Học Thủy Lợi</p>

                              <h4>Tác Nghiệp </h4>
                              <p><?php echo $row2['dc_lamviec']?></p>
                            </div>
                          <?php }?>
                          
                        </div>      
                                                        
                      <?php  
                      
                    
               }else
                {
                ?>
                     <div class="kq_tk">
                     Không tìm thấy kết quả phù hợp
                     </div>
                     <?php 

                 
                }  
              }
              // 
            }
         
        ?>
    </div>

    
