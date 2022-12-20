<!DOCTYPE html>
<html>
<?php include 'includes/links.php'; 
include 'includes/header.php';
?>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="pictures/vtdi4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style = "color: black">Mission Statement</h5>
          <p style = "color: #2b5795; font-size :18px; font-weight: bold;">To provide quality, tertiary technical and vocational education and training, 
            using innovative outcomes-based approaches, within a supportive and 
            student-centered environment.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pictures/vtdi3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style = "color: black">Vision Statement</h5>
          <p style = "color: #2b5795; font-size :18px; font-weight: bold;">A premier technical tertiary institution, producing a highly 
            competent workforce for national development and global competitiveness.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pictures/vtdi2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style = "color: black">Key To Success</h5>
          <p style = "color: #2b5795; font-size :18px; font-weight: bold;">We don’t just give students an education and experiences that set
             them up for success in a career. We help them succeed in their career—to discover a 
             field they’re passionate about and dare to lead it.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<style>
   .carousel-item 
   {
  height: 500px;
}

.item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 100px;
} 
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style = "background-color: #eeeee9"class="font-monospace text-muted">
    <div ; class="container text-black-50">
        <div class="title">
            <div >
                <br>
                <br>
                <h4 style = "color: #2b5795;">History of the VTDI</h>
               <br>
               <br>

            </div>
        </div>
        <style>
.h4 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
        <div class="row">
            <div class="col-md-3 font-monospace text-bg-light">
                <p class="fs-5 fw-semibold text-black-50"><span style="color: rgb(102, 102, 102);">The Vocational Training Development Institute (VTDI) was established in 1970 with the assistance of the International Labour Organization (ILO), the United Nations Development Programme (UNDP) and the Government of Jamaica. The institute was established to address the following aims:</span><br><br><br></p>
            </div>
            <div class="col-md-3 font-monospace text-bg-light">
                <p class="fs-5 fw-semibold"><span style="color: rgb(102, 102, 102);">To train instructors to deliver vocational education in the private and public sectors.</span><br><span style="color: rgb(102, 102, 102);">-To retrain and upgrade the skills of workers for employment and production.</span><br><span style="color: rgb(102, 102, 102);">-To prepare, develop and document industrial vocational training syllabuses, standards, manuals and literature for the use of the public and private sectors.</span><br><span style="color: rgb(102, 102, 102);">-To train and certify students and workmen at all levels and grades.</span><br></p>
            </div>
            <div class="col-md-3 font-monospace text-bg-light">
                <p class="fs-5 fw-semibold"><span style="color: rgb(102, 102, 102);">It was established in response to the growth in the bauxite industry. Workers were needed in this industry and they lacked the necessary training. Skilled craftsmen with no teacher training qualifications were recruited. The VTDI provided pedagogical training and helped to strengthen their technical competence. It was initially operated by a team of international experts with Jamaican counterparts.</span><br><br></p>
            </div>
            <div class="col-md-3 text-bg-light">
                <p class="fs-5 fw-semibold"><span style="color: rgb(102, 102, 102);">Since 1990, the VTDI has been managed by the Human Employment and Resource Training National Training Agency (HEART Trust/NTA) and has been described as the tertiary arm of the agency. The agency was established in 1982 and is funded by 3% of the employer’s wage bill. Today, the institute has expanded its original mandate of solely providing a diploma in technical and vocational education and training, by offering programmes to the postgraduate diploma level.</span><br></p>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Details-icons.css">
</head>


</body>

</html>


  <h1>VTDI'S Location</h1>

<div class = "fill">
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>

    <script type="text/javascript">
      window.onload = function() {
        L.mapquest.key = 'EixsMe0Kpwb8HaU6YewkXxfhTI3rWOkI';

        var map = L.mapquest.map('map', {
          center: [18.02444815032844, -76.73930904274977],
          layers: L.mapquest.tileLayer('hybrid'),
          zoom: 18
        });

        map.addControl(L.mapquest.control({ position: 'bottomright' }));

        
           L.marker([18.02444815032844, -76.73930904274977], {
              icon: L.mapquest.icons.marker({
                primaryColor: '#22407F',
                secondaryColor: '#3B5998',
                 shadow: true,
                  size: 'md',
                 symbol: 'I'
             })
           })
          .bindPopup('This is India')
          .addTo(map);
         

      }
     
    </script>
     </div>
  </head>

  <body style="border: 10; margin: 10; border-color: black;">
    <div id="map" style="width: 100%; height: 400px; "></div>
  </body>
</html> 
