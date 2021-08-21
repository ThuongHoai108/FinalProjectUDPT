<div style="display: flex;">
    <div class="col-3">
        <div class="p-3 border bg-light">
            <div class="list-group" >
                <button type="button" class="btn btn" class="list-group-item list-group-item-action active" aria-current="true" >CÁC THỂ LOẠI</button><br>
                <?php  
                foreach ($data['genreList'] as $genre){
                    ?>
                    <li><?php echo $genre['GenreName'] ?></li>
                    <?php  
                }
                ?>
                <br>
            </div>
        </div>
        <div class="p-3 border bg-light">
            <div class="list-group">
                <button type="button" class="btn btn" class="list-group-item list-group-item-action active" aria-current="true" >CÁC CA SĨ/ NHÓM NHẠC</button><br>
                <?php  
                foreach ($data['artistList'] as $artist){
                    ?>
                    <li><?php echo $artist['Name'] ?></li>
                    <?php  
                }
                ?>
                <br>
            </div>
         </div>
    </div>

    <div class="col-6">
        <div class="p-3 border bg-light">
            <div><p>TÌM KIẾM</p></div>
            <div class="row">
                <div class="col-3">
                    <div>Từ khóa</div>
                </div>
                <div class="col-7">
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control" placeholder="Từ khóa" aria-label="Search">
                    </form>
                </div>
                <div class="col-2">
                    <i class="fas fa-search" style="color: red;"></i>
                </div>
            </div><br>
            <div class="row">
                <div class="col-3">
                    <div></div>
                </div>
                <div class="col-2">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">Ca sĩ</label><br>
                </div>
                <div class="col-2">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">Album</label><br>
                </div>
                <div class="col-2">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">Bài hát</label><br>
                </div>
                <div class="col-3">
                </div>
            </div>
            <hr>
            <div>Kết quả</div><br>
            <div><i class="fas fa-angle-double-right" style="color: #95c706; margin-left: 20px;"></i>  BÀI HÁT</div><br>
            <li style="list-style-type: none;color:red">
                <div class="row" style="background-color: silver;">
                    <div class="col-10">
                        <div>1.Tựa của bài hát 1 - Ca sĩ trình bày (320)</div>
                        <div class="col-md-12 text-end"><i>Tên thể loại (4:25)</i></div>
                    </div>
                    <div class="col-2">
                        <i class="fas fa-play" style="color: #95c706; margin: 20px;margin-left: 50px;"></i>
                    </div>
                </div>
            </li><br>
            <li style="list-style-type: none;color:red">
                <div class="row" style="background-color: silver;">
                    <div class="col-10">
                        <div>2.Tựa của bài hát 1 - Ca sĩ trình bày (320)</div>
                        <div class="col-md-12 text-end"><i>Tên thể loại (4:25)</i></div>
                    </div>
                    <div class="col-2">
                        <i class="fas fa-play" style="color: #95c706; margin: 20px;margin-left: 50px;"></i>
                    </div>
                </div>
            </li><br>

            <div><i class="fas fa-angle-double-right" style="color: #95c706; margin-left: 20px;"></i>  ALBUM</div><br>
            <li style="list-style-type: none;color:red">
                <div class="row" >
                    <div class="col-10" style="background-color: silver;">
                        <div>1.Tên album 1 (Số bài hát)</div>
                        <div class="col-md-12 text-end"><i>Ngày phát hành</i></div>
                    </div>
                    <div class="col-2" style="background-color: #f2ffcc; text-align: center; padding-top: 10px;">
                        <div>Cover</div>
                    </div>
                </div>
            </li><br>
            <li style="list-style-type: none;color:red">
                <div class="row" >
                    <div class="col-10" style="background-color: silver;"> 
                        <div>2.Tên album 2 (Số bài hát)</div>
                        <div class="col-md-12 text-end"><i>Ngày phát hành</i></div>
                    </div>
                    <div class="col-2" style="background-color: #f2ffcc; text-align: center; padding-top: 10px;">
                        <div>Cover</div>
                    </div>
                </div>
            </li><br>

            <div><i class="fas fa-angle-double-right" style="color: #95c706; margin-left: 20px;"></i>  CA SĨ/ NHÓM NHẠC</div><br>
            <li style="list-style-type: none;color:red">
                <div class="row" style="background-color: silver;">
                    <div class="col-10">
                        <div>1.Tên ca sĩ</div>
                    </div>
                    <div class="col-2" style="background-color: #f2ffcc; text-align: center;padding: 10px;">
                        <div>Image</div>
                    </div>
                </div>
            </li><br>
            <li style="list-style-type: none;color:red">
                <div class="row" style="background-color: silver;">
                    <div class="col-10">
                        <div>2.Tên ca sĩ</div>
                    </div>
                    <div class="col-2" style="background-color: #f2ffcc; text-align: center;padding: 10px;">
                        <div>Image</div>
                    </div>
                </div>
            </li><br>
         </div>
        
    </div>

    <div class="col-3">
        <div class="p-3 border bg-light">
            <form action="#" class="login" method="POST">
                <button type="button" class="list-group-item list-group-item-action active" style="color: black; background-color: #7b7163; border-color: #9bb555;"aria-current="true" >ĐĂNG NHẬP</button><br>
                <div class="row g-3 align-items-center">
                    <div class="col-6" style="font-size: 14px;">
                      <label for="username" class="col-form-label">Tên đăng nhập</label>
                    </div>
                    <div class="col-6">
                      <input type="text" id="username" class="form-control" aria-describedby="usernameHelpInline">
                    </div>
                  </div><br>
                  <div class="row g-3 align-items-center">
                    <div class="col-6" style="font-size: 14px;">
                      <label for="password" class="col-form-label">Mật khẩu</label>
                    </div>
                    <div class="col-6">
                      <input type="password" id="password" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                  </div><br>
                  <div class="row g-3 align-items-center">
                    <div class="col-6">
                    </div>
                    <div class="col-6" >
                        <button type="submit" class="btn btn">Đăng nhập</button>
                    </div>
                  </div>
            </form>  
        </div>
        <div class="p-3 border bg-light">
            <div class="list-group">
                <button type="button" class="btn btn" class="list-group-item list-group-item-action active" aria-current="true">ALBUM MỚI</button><br>
                <?php  
                foreach ($data['albumList'] as $album){
                    ?>
                    <li><?php echo $album['Title'] ?></li>
                    <?php  
                }
                ?>
                <br>
            </div>
         </div>
        
    </div>
  </div>