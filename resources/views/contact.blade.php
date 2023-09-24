@include('navbar')
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">
</head>
<body>
  <div class="form-container-main">
    <div class="form-container">
      <div class="form-image">
        <h1 class="montserrat">Request A Quote</h1>
        <model-viewer class="model" alt="laptop" src="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/b5f434ae4d45d10fe1664d5606ad28e4d9c739af/images/laptop.glb" shadow-intensity="1"  camera-controls touch-action="pan-y"  environment-image="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/b5f434ae4d45d10fe1664d5606ad28e4d9c739af/images/dancing_hall_2k.hdr" exposure="1.5"   disable-zoom disable-tap  camera-orbit="-45deg 60deg 9m" autoplay ></model-viewer> 
      </div>
      <div class="form">
        <form action="{{ route('quote') }}" method="POST">
          @csrf
          <input type="text" name="name" id="name" placeholder="Name" autofocus>
          <input type="email" name="email" id="mail" placeholder="Email">
          <input type="text" name="company" id="company" placeholder="Company">
          <textarea name="project_details" id="message" cols="30" rows="10" placeholder="More Details About Your Project"></textarea>
          
          <!-- Upload file section -->
          <div class="file-upload">
            <label for="file-input" style="color:white;font-size:16px;">Upload 2D file</label>
            <input type="file" name="file" id="file-input">
          </div>
          
          <div class="button-container">
            <button type="submit" class="send-button">Send</button>
            <div class="reset-button-container">
              <button type="reset" class="reset-button" id="reset-btn">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
      <script>
$( ".filters-button" ).click(function() {
  $( ".filters-bar" ).toggleClass( "show", function() {
    // Animation complete.
  });
});
        </script>
</body>