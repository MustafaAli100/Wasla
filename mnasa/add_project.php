

<?php 

include "template/heder_user.php";

?>
</div>
        

    
    <body>
   
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left  flex-column flex-md-row">
                        <div style="padding-top: 5%;">
                            <h2 class="text-white pb-2 fw-bold">Add New Project</h2>
                            <!-- <h5 class="text-white op-7 mb-2">Add your project with the required specifications and skills and Receive offers</h5> -->
                        </div>
                        <div class="ml-md-auto py-2 py-md-0">
                            <!-- <a href="#" class="btn btn-secondary btn-round">Added projects</a> -->
                        </div>
                    </div>
                </div>
            </div>
        
    <div class="container"style="margin-top:5%">
    <div class="d-flex justify-content-start col-12">
            <!-- <h2> Add Project</h2> -->
    </div>
        <div class="panel-body"> 
         <form method="POST" action="" value="">
            <div class="bade-black">
                    <label for="project__title" class="control-label">Project Title </label>
                <input id="project__title" class=" form-control" placeholder="Listed Title For a brief Describes Your Project Accurately" name="title" type="text">
            </div>
             
    <!--المهارااااااااات المطلوبة-->
            <div class="form-group  ">
                    <label for="project__title" class="control-label">Skills Required </label>
                <div class="tagsinput-container">
                    <input type="text" class=" form-control" id="project__skills" name="skills" value="" data-filter="skills" data-ui="skillsInput" placeholder="Select The Most Important Skills required The Implementation Of Your Project">
                </div>
            </div>
    <!--تفاصيل المشرووووع-->
     <div class="form-group ">
             <label for="project__details" class="control-label">Project Details </label>
            <textarea class=" form-control" row="6" id="project__details" name="description" cols="50" rows="10" placeholder=" Include a Detailed And Accurate DSescription Of Your Project">                </textarea>
     </div>
         <!--تلميزانية المتوقعة-->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group project__budget-select " data-selectize-keyboard="disable">
                     <label for="project__budget" class="control-label">Projected Budget</label>
            <select name="budget" id="project__budget" class="form-control" data-ui="placeholder-select">
                <option value="" selected="" disabled="" hidden=""></option>
                <option value="25-50">25 - 50 $1</option>
                <option value="50-100">50 - 100 $1</option>
                <option value="100-250">100 - 250 $1 </option>
                <option value="250-500">250 - 500 $1</option>
                <option value="500-1000">500 - 1000 $1</option>
                <option value="1000-2500">1000 - 2500 $1</option>
                <option value="2500-5000">2500 - 5000 $1</option>
                <option value="5000-10000">5000 - 10000 $1</option>
             </select>
                 <p class="help-block text-zeta pull-right customF">Choose A Budget Suitable To Get To Offers Good </p>
            </div>
         </div>
                <div class="col-sm-6">
                    <div class="form-group">
                            <label for="project__duration" class="control-label">اExpected delivery time</label>
                        <div class="input-group">
                            <input type="number" name="duration" id="project__duration" min="1" value="" class="customIpg form-control "><span class="input-group-text">Days</span>
                        </div>
                        <p class="help-block text-zeta pull-right customF">When you Need To Receive Your Project </p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class=" input-group">
                    <button type="submit" name="project__submit" class="btn btn-lg btn-info"> Post Now</button>
                </div>
            </div>  <!-- end btn-group -->
            <!--  end panel body -->
            <!--  end panel -->
        </form>
    </div>
    </div>
    
    <?php include "template/footer.php";?>
    </body></html>