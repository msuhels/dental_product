<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Product Detail</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="..\assets\dist\js\product.js"></script>

    <style>
      body{
        overflow-x: hidden;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      path:hover { 
        fill: rgba(0, 0, 255, 0.83)!important;
        stroke:  rgba(0, 0, 255, 0.83)!important;
        fill-opacity: 0.5!important; 
      }
      path { stroke: black !important;;
        stroke-opacity: 0.6 !important;;
        stroke-width: 2.5px !important;;
       }
      .button5 {border-radius: 50%;}
      .button {
        background-color: #40c4fa;
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        width: 48px;
        height: 48px;
     
      }
      .teeth-color{
         fill: rgba(0, 0, 255, 0.83)!important;
        stroke:  rgba(0, 0, 255, 0.83)!important;
        fill-opacity: 0.5!important; 
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
   
<div class="row">
  <div class="col-lg-4">
     <!-- <img class="d-block mx-auto mb-4" src="../assets/mouth.png" alt=""> -->
     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="300px" height="500px" viewBox="0 0 1145 1800" xml:space="preserve" style="margin-top: 100px;">
      <image overflow="visible" width="1145" height="1800" xlink:href="../assets/mouth1.png"></image>
    <path id="d1" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M187.333,722.667c28.357,2.767,79.105,16.333,73.333,65c-6.214,52.389-41,58-86,51.667s-71.667-14-64-66S160,720,187.333,722.667z" fill="red" fill-opacity="0" stroke="red" stroke-opacity="1" cursor="pointer" style="fill: red; fill-opacity: 0; stroke: red; stroke-opacity: 1;"></path>

    <path id="d2" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M195.667,600.333c45.083,9.167,56.392,18.335,65.588,37.333c8.996,18.583,10.996,63.333-21.921,76c-21.99,8.462-42.333,3.25-57.333,1.583s-58.273-2.401-63-51.25c-3.75-38.75,31-60.667,40.333-63.667S189.77,599.134,195.667,600.333z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer" style="fill: rgb(255, 0, 0); fill-opacity: 0; stroke: rgb(255, 0, 0); stroke-opacity: 1;"></path>

    <path id="d3" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M189.667,478c23.44-5,78.334,18.667,88.667,33.667s14.005,54.285-2,73.333c-15.333,18.25-46.961,21.396-83.974,9.333c-38.61-12.583-48.183-25.931-47.026-63.667C146.25,500.75,178.28,480.429,189.667,478z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer" style="fill: rgb(255, 0, 0); fill-opacity: 0; stroke: rgb(255, 0, 0); stroke-opacity: 1;"></path>

    <path id="d4" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M211.333,384.667c15.851-4.267,50,5.333,66.667,15s28.667,16.334,33,34.667s6.063,44.37-26.333,49.333c-29.917,4.583-44.579-2.959-59.667-7.333c-19.733-5.72-47.949-6.648-46-52C180.25,395.25,202.667,387,211.333,384.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer" style="fill: rgb(255, 0, 0); fill-opacity: 0; stroke: rgb(255, 0, 0); stroke-opacity: 1;"></path>

    <path id="d5" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M235,297.667c10.278-11.146,41-16.667,68,3s46.333,33.667,42.667,60.667S324.413,395.184,306,396.667c-27.278,2.196-47.5-15.074-59.874-22.333C224.25,361.5,195.5,340.5,235,297.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d6" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M316.667,197.667C332.946,189.208,346.113,191,362,205c12.557,11.065,32.75,37.5,33.667,55.333c0.745,14.484,3.833,43.167-29.333,50.333c-25.449,5.499-34.667-1-61.333-18.667s-39.5-37-23.004-62.333C296.882,206.806,304.36,204.061,316.667,197.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d7" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M377.333,143.667C400,128.25,450.798,115.112,461,162.333c11,50.917,2.667,76.333-18,83.333s-28,0.333-53.667-24S334.639,172.706,377.333,143.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d8" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M515.333,86.333c30.574-2.731,63,14.953,54.667,44.143S558.218,201.753,533.333,207c-26.083,5.5-39,1-54-24.667S429.5,94,515.333,86.333z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d9" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M638,87.667c38,1.083,60,26.667,41,70s-30.666,54.094-57.666,51.213s-32.569-24.316-40-52.213C572.5,123.5,558.436,85.399,638,87.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d10" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M761.334,138.667c23.416,11.083,42.078,39.189,12.333,65.333c-34.417,30.25-44.1,56.458-75.667,38.667C673.75,229,680.379,191.383,682.334,175C684.75,154.75,696.08,107.782,761.334,138.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d11" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M854.001,215.667c26.999,28.583,19.485,52.364-11,74.667c-38.501,28.167-62.313,25.012-83,11.667c-8.082-5.214-11.636-22.309-10.717-36.779c0.843-13.283,5.612-23.882,10.717-31.221C770.667,218.667,803.173,161.856,854.001,215.667z" fill="red" fill-opacity="0" stroke="red" stroke-opacity="1" cursor="pointer"></path>

    <path id="d12" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M920.334,308.667c20.416,26.833,10.667,51.333-29,70.667c-26.889,13.105-36.834,20.167-59.76,16.723c-17.743-2.666-31.478-16.556-31.478-37.058c0-24.749,12.821-35.146,29.237-47.918C856.75,289.75,892.238,271.74,920.334,308.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d13" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M961.667,403.667c7.966,11.79,9.157,32.558,1.954,47.264c-5.765,11.769-16.905,18.217-34.252,23.736c-38.398,12.218-80.369,17.833-94.702-7c-5.595-9.693-1.997-26.577,0.666-35.739c4.737-16.297,15.172-23.313,27.334-29.928C881.667,391.667,936.667,366.667,961.667,403.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d14" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M998.001,521.667C1008.75,552.5,989.25,582,972.334,589c-12.474,5.162-61.666,19-90.333,6.667S857,549.333,858.667,536s8.833-31,35-43.667c24.406-11.814,40.001-13.667,48.334-14.667S981.623,474.687,998.001,521.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d15" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M1025.001,645.333c8.499,28.417-12.501,57.667-32.334,64.333c-21.269,7.15-60.832,7.866-72,7.333c-41.917-2-48.441-50.174-39-73.333c8.833-21.667,22.667-29,29.667-32s43.907-13.228,58.667-13.333C987,598.212,1013.28,606.145,1025.001,645.333z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path> 

    <path id="d16" class="addCF top_teeth" vector-effect="non-scaling-stroke" d="M1035.001,771c3.999,35.5-0.251,61.75-65,68.667c-50.274,5.371-77.501-3.167-84.667-46.333c-5.343-32.182,10.667-61.333,63.667-69.667S1031.002,735.5,1035.001,771z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d17" class="addCF bottom_teeth" vector-effect="non-scaling-stroke" d="M1057.001,1068.667c-3.773,35.889-31.408,54.123-76,48.334c-52.001-6.751-80.916-32.24-73-70c9.749-46.501,37.666-56.666,86.666-47S1062.25,1018.75,1057.001,1068.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d18" class="addCF" vector-effect="non-scaling-stroke" d="M1042.334,1193.334c-9.084,36.916-35.084,48-55,48c-21.084,0-69.667-14.333-82-33.333s-15.334-66.751,14.667-81c20.21-9.599,36.333-5.666,43.333-5s39.334,5.333,49.667,9.333S1051.403,1156.479,1042.334,1193.334z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d19" class="addCF" vector-effect="non-scaling-stroke" d="M1010.667,1318.001c-7.899,23.924-34.917,47.999-59,43.666c-22.524-4.053-69.269-26.252-74-40.333c-17.417-51.834,3.833-77.334,26.667-83c18.756-4.654,60.166,1.416,87,15C997.465,1256.438,1022.333,1282.668,1010.667,1318.001z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d20" class="addCF" vector-effect="non-scaling-stroke" d="M964.334,1432.334c-9.977,18.674-34,27.667-58,18s-56.189-24.847-61.667-38.667c-16.417-41.417-3.334-59,21-62.333s46.668,4.667,57.334,8.667s33.218,15,39,20.333C969.5,1385.25,977.334,1408.001,964.334,1432.334z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d21" class="addCF" vector-effect="non-scaling-stroke" d="M913.667,1516.667c-9.299,14.583-27.167,27.333-51,22.667c-17.139-3.355-64.667-33.334-69.333-59.333c-3.176-17.696,0.916-43.751,29-48c22.716-3.437,43,5,60,15s28.667,17.667,33.667,24S928.333,1493.667,913.667,1516.667z" fill="red" fill-opacity="0" stroke="red" stroke-opacity="1" cursor="pointer"></path>

    <path id="d22" class="addCF" vector-effect="non-scaling-stroke" d="M822.668,1525.334c19.582,14.979,40.666,42.667,8.333,76s-60,12.333-60,12.333c-15.751-11.167-38.009-41.667-38-61.333c0.011-24.104,3.499-47.687,38-47.667C801.27,1504.685,811.025,1516.429,822.668,1525.334z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d23" class="addCF" vector-effect="non-scaling-stroke" d="M759.334,1613.334c10.166,11.916,17.667,31.667-9.333,50.667s-52.333,21.332-66,5.666s-18.656-37.663-18.667-57.333c-0.015-28.084,4.885-37.82,18-44.667c15.166-7.917,32.666-3.667,41,8S753.712,1606.745,759.334,1613.334z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d24" class="addCF" vector-effect="non-scaling-stroke" d="M638.001,1703.334c-21.411,6.582-61.722,3.076-61.667-29.666c0.052-31.045,0.603-61.729,8-69.334c9.916-10.193,24.969-15.046,41.333-7.666c19.583,8.832,35.679,40.249,40.646,54.333C674.25,1673.5,683,1689.5,638.001,1703.334z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d25" class="addCF" vector-effect="non-scaling-stroke" d="M514.667,1704.334c-25.895-2.696-52.032-16.863-37.667-47.666c18.5-39.668,30.895-65.198,62-62.243c35,3.325,29.667,34.243,30.333,75.576S530.667,1706,514.667,1704.334z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d26" class="addCF" vector-effect="non-scaling-stroke" d="M409.334,1672.001c-24.671-9.859-48-36.334-18.333-63.667s37.989-52.584,65.667-42.714c25.555,9.113,29.333,32.63,20.667,67.381C469.783,1663.28,458.75,1691.75,409.334,1672.001z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d27" class="addCF" vector-effect="non-scaling-stroke" d="M318.667,1528.334c36.4-33.084,73-25,82-18s28.64,49.166-15.333,94.667c-24.25,25.094-48.705,16.25-68.333-1C292.25,1582.25,288.537,1555.72,318.667,1528.334z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d28" class="addCF" vector-effect="non-scaling-stroke" d="M258.667,1449.667c16.376-7.635,32.333-21.667,61.667-18c22.281,2.785,32.05,15.334,33.025,36.667s-11.691,35.667-35.025,52.667s-58.673,33.756-84,0C208,1485.902,230.013,1463.025,258.667,1449.667z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d29" class="addCF" vector-effect="non-scaling-stroke" d="M218,1360.334c20.314-7.387,39.667-14.666,60.333-11.333s34.333,17.667,29.667,39.667s-7.5,34.832-46,52.666c-34.552,16.005-62.127,21.087-82-9.949c-8.25-12.885-5.946-34.583-1.431-45.642C184.375,1371.525,195.313,1368.584,218,1360.334z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d30" class="addCF" vector-effect="non-scaling-stroke" d="M179.334,1244.001c23.679-8.001,59-11.333,75,0s22,31.332,18.333,51.666c-2.138,11.853,0.709,20.158-8.303,31.135c-6.449,7.854-25.999,19.237-38.387,24.865c-37.135,16.87-48.728,14.083-71.31-3.497c-27.133-21.123-24.482-52.318-19-69.169C142.5,1258,157.586,1251.35,179.334,1244.001z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>

    <path id="d31" class="addCF" vector-effect="non-scaling-stroke" d="M168.667,1123.001c27.728-4.651,48.667-2.333,59.333,4.667s26.667,31.666,21.333,55.666s-11.667,31.667-27.667,39.667s-56,28-85.667,14s-37.774-56.17-31.667-73C112.5,1141.5,117,1131.668,168.667,1123.001z" fill="red" fill-opacity="0" stroke="red" stroke-opacity="1" cursor="pointer"></path>

    <path id="d32" class="addCF" vector-effect="non-scaling-stroke" d="M149.334,1000.334c34.439-5.632,64.916-7.334,80.333,22.667c12.605,24.529,14.583,58.749-10.667,75.333c-20.644,13.559-41.5,19.334-73.333,19.334c-28.167,0-57.031-14.873-57.667-48.667C87.182,1025.5,87.171,1010.5,149.334,1000.334z" fill="#FF0000" fill-opacity="0" stroke="#FF0000" stroke-opacity="1" cursor="pointer"></path>
      
      <g id="mt_spots"></g>
    </svg>
 
  </div>
  <div class="col-lg-8" style="margin-top: 100px;">
    <h2>Barra</h2>
   <p class="">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    <form method="get" action="../checkout/checkout.php">
  <div class="form-group row" style="margin-top: 20px;">
    <label for="staticEmail" class="col-sm-3">Product Name:</label>
    <div class="col-sm-7">
       <input type="text" class="form-control" id="inputPassword" placeholder="Product Name">
    </div>
  </div>
<div class="form-group row" style="margin-top: 20px;">
   <label for="staticEmail" class="col-sm-3">Structure:</label>
   <div class="col-sm-7">
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" id="top_checkbox" value="top" name="teeth" checked>
      <label class="form-check-label" for="inlineCheckbox1">Top</label>
     </div>
     <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" id="bottom_checkbox" value="bottom" name="teeth">
      <label class="form-check-label" for="inlineCheckbox1">Bottom</label>
     </div>
   </div>
</div>
  <div class="form-group row" style="margin-top: 20px;">
    <label for="inputPassword" class="col-sm-3">Material:</label>
    <div class="col-sm-7 form-group">
       <select id="inputState" class="form-select">
        <option selected>Titanium</option>
        <option>Platinum</option>
        <option>Gold</option>
        <option>Silver</option>
        <option>Platinum</option>

      </select>
    </div>
  </div>
  <h6 style="margin-top: 20px;">Implantes</h6>
   <div class="row col-md-12" >
    <div class="col-md-3 mb-3">
      <label for="validationCustom01" style="color: #40bffb;
    font-weight: 500;"></label>
     
    </div>
    <div class="col-md-3 mb-3">
     
      <label for="validationCustom01" style="color: #40bffb;
    font-weight: 500;">Fabricante</label>
      
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom02" style="color: #40bffb;
    font-weight: 500;">sistema de implantes</label>
    
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustomUsername" style="color: #40bffb;
    font-weight: 500;">Plataforma</label>
    
    </div>
  </div>

   <div class="row col-md-12" style="margin-top: 20px;">
    <table class="form-table" id="customFields">
     <!--  <tr valign="top" style="margin-top:10px;">
          <td style="width: 27%;">
             <a href="javascript:void(0);" class="button button5"></a>
          </td>
          <td>
            <select id="inputState" class="form-select"><option selected>Option 1</option><option>Option 2</option></select>
          </td>
          <td>
            <select id="inputState" class="form-select"><option selected>Option 1</option><option>Option 2</option></select>
          </td>
          <td>
            <select id="inputState" class="form-select"><option selected>Option 1</option><option>Option 2</option></select>
          </td>
          </tr> -->
    </table>
   </div>
   <div class="form-group row" style="margin-top: 30px;">
    <label for="inputPassword" class="col-sm-3">Services:</label>
    <div class="col-sm-7 form-group">
       <select id="inputState" class="form-select">
        <option value="">Service 1</option>
        <option>Service 2</option>
        <option>Service 3</option>
       

      </select>
    </div>
  </div>  
  <div class="form-group row" style="margin-top: 20px;">
    <label for="inputPassword" class="col-sm-3">Variety:</label>
    <div class="col-sm-7 form-group">
       <select id="inputState" class="form-select">
        <option selected>Variety 1</option>
        <option>Variety 2</option>
        <option>Variety 3</option>
      

      </select>
    </div>
  </div>
  <div class="form-group row" style="margin-top: 20px;">
        <label for="inputPassword" class="col-sm-3" style="color: #45c4fa;font-weight: 600;">    Total Price: $<span class="total"></span></label>
    <div class="col-sm-7">
       <button class="btn btn-primary" type="submit">Proceed to Checkout</button>
    </div>
 
  </div>
  <input type="hidden" name="price" class="price" value="">
</form>

  </div>
 

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


   <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
   <script src="form-validation.js"></script>
   <script type="text/javascript">
     $(document).ready(function(){
     var checked = $('input[name=teeth]:checked').val();
        if(checked == 'top'){
                for (var n = 10; n < 33; ++ n){
                 $('#d'+n).hide();
               }
             }
               if(checked == 'bottom'){
                for (var n = 1; n < 17; ++ n){
                 $('#d'+n).hide();
               }
               for (var n = 25; n < 33; ++ n){
                 $('#d'+n).hide();
               }
               }


         $(document).on('click', '.addCF', function(e) {
         var id = $(this).attr('id');
         
        // alert(id);
          $('#'+id).addClass('teeth-color');
          $('#'+id).removeClass('addCF');
          $('#'+id).addClass('remCF');

         // alert(id);
         $("#customFields").append('<tr valign="top" style="margin-top:10px;" id="id_'+id+'"><td style="width: 27%;"><a href="javascript:void(0);" class="button button5">'+id+'</a></td><td><input type="hidden"  id="price_'+id+'" class="amount" value="500" ><select id="inputState" class="form-select"><option selected>Option 1</option><option>Option 2</option></select></td><td><select id="inputState" class="form-select"><option selected>Option 1</option><option>Option 2</option></select></td><td><select id="inputState" class="form-select"><option selected>Option 1</option><option>Option 2</option></select></td></tr>'); 
          var tid = $(this).attr('id');
          var qty = $('#price_'+tid).val();
          var total = 0;
          $('.amount').each(function(i, e) {
            var amt = 50;
            total += amt;
          });
          $('.total').html(total);
          $("input[name='price']").val(total);

                            
     });
    
      $('input[type="radio"]').click(function() {
        for (var n = 1; n < 33; ++ n){
                 $('#d'+n).show();
               }
      var checked = $('input[name=teeth]:checked').val();
      // alert(checked);
              if(checked == 'top'){
                for (var n = 10; n < 33; ++ n){
                 $('#d'+n).hide();
               }
             }
               if(checked == 'bottom'){
                for (var n = 1; n < 17; ++ n){
                 $('#d'+n).hide();
               }
               for (var n = 25; n < 33; ++ n){
                 $('#d'+n).hide();
               }
               }

            
       });
     


   $(document).on('click', '.remCF', function(e) {
   event.preventDefault();
   var tr = $(this).parent().parent();
   var tid = $(this).attr('id');
      $('#id_'+tid).remove();
      $('#'+tid).removeClass('teeth-color');
      $('#'+tid).removeClass('remCF');
      $('#'+tid).addClass('addCF');
      var tid   = $(this).attr('id');
      var qty   = $('#price_'+tid).val();
      var amt   =  $('.total').html();
      var total = 0;
      total = amt - 50;
      $('.total').html(total);
      $("input[name='price']").val(total);
            // alert(total); 

   });
 });  

  </script>
  </body>
</html>
