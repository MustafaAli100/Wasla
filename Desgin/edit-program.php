<?php 

include "template/heder_user.php";

?>

<body>

<div class="main-panel">
<div class="content">
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>

                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview"><img src="Layouts/images/BLOG.png"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <h3>Personal info</h3>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="Jane">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="Bishop">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Phone:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Gender</label>
                        <div class="col-lg-8">
                            <label class="radio-inline"><input type="radio" name="optradio">Femal</label>
                            <label class="radio-inline"><input type="radio" name="optradio">Male</label>

                        </div>
                    </div>
                    <!--  -->
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="email" value="janesemail@gmail.com">
                        </div>
                    </div>
                    <!--  -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Addreses</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" value="Alkh,Bahri">
                        </div>
                    </div>
                    <!--  -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" value="11111122333">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" value="11111122333">
                        </div>
                    </div>
                    <!--  -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Skills</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" value="Html,Css,Javasrpict">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Work Links</label>
                        <div class="col-md-8">
                            <textarea class="form-control" rows="3" id=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="button" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <input type="reset" class="btn btn-danger" value="Cancel">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <?php include "template/footer.php";?>
</div>
</div>
</body>

</html>