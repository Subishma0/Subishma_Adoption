<style>
    body{
    background-color:#dce3f0;
}

.height{
    
    height:100vh;
}

.card{
    
    width:350px;
    height:370px;
}

.image{
    position:absolute;
    right:12px;
    top:10px;
}

.main-heading{
    
    font-size:40px;
    color:red !important;
}

.ratings i{
    
    color:orange;
    
}

.user-ratings h6{
    margin-top:2px;
}

.colors{
    display:flex;
    margin-top:2px;
}

.colors span{
    width:15px;
    height:15px;
    border-radius:50%;
    cursor:pointer;
    display:flex;
    margin-right:6px;
}

.colors span:nth-child(1) {
    
    background-color:red;
    
}

.colors span:nth-child(2) {
    
    background-color:blue;
    
}

.colors span:nth-child(3) {
    
    background-color:yellow;
    
}

.colors span:nth-child(4) {
    
    background-color:purple;
    
}

.btn-danger{
    
    height:48px;
    font-size:18px;
}
    </style>

<?php include("database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>OUR BREEDS</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
<div class="height d-flex justify-content-center align-items-center">
    
    <div class="card p-3"><img src="dog2.jpg">
        
        <div class="d-flex justify-content-between align-items-center ">
            <div class="mt-2">
                <h4 class="text-uppercase">Dogs</h4>
                <div class="mt-5">
                    <h5 class="text-uppercase mb-0">Jacko</h5>
                    <h1 class="main-heading mt-0">Husky</h1>
                    <div class="d-flex flex-row user-ratings">
                        <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="image">
                
            </div>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
           
            <div class="colors">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        </div>
        
        
       
        
        <button class="btn btn-danger">Add to cart</button>
    </div>
    
</div>
<div class="height d-flex justify-content-center align-items-center">
    
    <div class="card p-3"><img src="dog3.jpg">
        
        <div class="d-flex justify-content-between align-items-center ">
            <div class="mt-2">
                <h4 class="text-uppercase">Dogs</h4>
                <div class="mt-5">
                    <h5 class="text-uppercase mb-0">Bruno</h5>
                    <h1 class="main-heading mt-0">LabradorRetriever</h1>
                    <div class="d-flex flex-row user-ratings">
                        <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="image">
                
            </div>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
           
            <div class="colors">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        </div>
        
        
       
        
        <button class="btn btn-danger">Add to cart</button>
    </div>
    
</div>
    
</body>
</html>