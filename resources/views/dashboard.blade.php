@include('navbar')
<html>
    <head>
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('css/upload.css') }}" rel="stylesheet">

    </head>
    <body>
<div class="area"></div><nav class="main-menu">
    <ul>
        <li>
            <a href="https://render4less.com">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">
                   Home
                </span>
            </a>
          
        </li>
        <li class="has-subnav">
            <a href="{{ route('myprojects') }}">
                <i class="fa fa-globe fa-2x"></i>
                <span class="nav-text">
                  My Projects                
                </span>
            </a>
            
        </li>
        <li class="has-subnav">
            <a href="{{ route('contact') }}"">
               <i class="fa fa-comments fa-2x"></i>
                <span class="nav-text">
                    Contact Support
                </span>
            </a>
            
        </li>
        <li class="has-subnav">
            <a href="#">
               <i class="fa fa-camera-retro fa-2x"></i>
                <span class="nav-text">
                    Our Last Works
                </span>
            </a>
           
        </li>
        
        <li>
            <a href="#">
                <i class="fa fa-book fa-2x"></i>
                <span class="nav-text">
                    FAQ
                </span>
            </a>
        </li>
        <li>
           <a href="#">
               <i class="fa fa-cogs fa-2x"></i>
                <span class="nav-text">
Payments Setting
                </span>
            </a>
        </li>
        <li>
           <a href="#">
                <i class="fa fa-map-marker fa-2x"></i>
                <span class="nav-text">
                    About Us
                </span>
            </a>
        </li>
        <li>
            <a href="#">
               <i class="fa fa-info fa-2x"></i>
                <span class="nav-text">
                    Documentation
                </span>
            </a>
        </li>
    </ul>

    <ul class="logout">
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off fa-2x"></i>
                <span class="nav-text">
                    Logout
                </span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>  
    </ul>
</nav>
<div style="width:80%;margin-left:5%;">
	<div class="modal-header">
		<div class="modal-logo">
			<span class="logo-circle">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="419.116" viewBox="0 0 512 419.116">
					<defs>
						<clipPath id="clip-folder-new">
							<rect width="512" height="419.116" />
						</clipPath>
					</defs>
					<g id="folder-new" clip-path="url(#clip-folder-new)">
						<path id="Union_1" data-name="Union 1" d="M16.991,419.116A16.989,16.989,0,0,1,0,402.125V16.991A16.989,16.989,0,0,1,16.991,0H146.124a17,17,0,0,1,10.342,3.513L227.217,57.77H437.805A16.989,16.989,0,0,1,454.8,74.761v53.244h40.213A16.992,16.992,0,0,1,511.6,148.657L454.966,405.222a17,17,0,0,1-16.6,13.332H410.053v.562ZM63.06,384.573H424.722L473.86,161.988H112.2Z" fill="var(--c-action-primary)" stroke="" stroke-width="1" />
					</g>
				</svg>
			</span>
		</div>
		<button class="btn-close">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" fill="var(--c-text-secondary)"/></svg>
		</button>
	</div>
	<div id="upload-modal">
        <div class="modal-body">
            <h2 class="modal-title">Upload New Project</h2>
            <p class="modal-description">Attach the file below</p>
            <label class="upload-area">
                <span class="upload-area-icon">
                    <!-- Paste the SVG code here -->
                </span>
                <span class="upload-area-title">Drag file(s) here to upload.</span>
                <span style="font-size: 12px;">dwg, dxf, pdf, Jpeg, png</span>
                <span class="upload-area-description">
                    Alternatively, you can select a file by <br/><strong><a href="#" id="file-input-link">clicking here</a></strong>
                </span>
                <input type="file" id="file-input" style="display: none;">
            </label>
        </div>
        <div class="modal-footer">
            <button class="btn-secondary">Cancel</button>
            <button class="btn-primary" id="upload-button">Upload File</button>
        </div>
        <div class="upload-message" id="success-message" style="display: none;">File uploaded successfully!</div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://apis.google.com/js/api.js"></script>
<script>
    $(document).ready(function() {
        // Handle file selection when "clicking here" link is clicked
        $('#file-input-link').click(function(event) {
            event.preventDefault();
            $('#file-input').click();
        });

        // Handle file selection
        $('#file-input').change(function() {
            var fileName = $(this).val().split('\\').pop();
            $('.upload-area-title').text(fileName);
        });

        // Load the Google Drive API
        gapi.load('client:auth2', initializeGoogleDriveAPI);

        // Initialize the Google Drive API client
        function initializeGoogleDriveAPI() {
            gapi.client.init({
                apiKey: 'AIzaSyBX8Ak5kqGDbDDgM8rTE_V9n3Txu4ty47I', // Replace with your Google API key
                clientId: '364285194887-1d1hsh9pdb7fbo3bj1bcj029v814p0ou.apps.googleusercontent.com', // Replace with your Google API client ID
                discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/drive/v3/rest'],
                scope: 'https://www.googleapis.com/auth/drive.file',
                redirectUri: 'http://localhost:60249/' // Replace with the correct redirect URI
            }).then(function() {
                // Listen for sign-in state changes
                gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);
            });
        }

        // Update the sign-in status
        function updateSigninStatus(isSignedIn) {
            if (isSignedIn) {
                $('#upload-button').prop('disabled', false);
            } else {
                $('#upload-button').prop('disabled', true);
            }
        }

        // Handle file upload
        $('#upload-button').click(function() {
            var file = $('#file-input').prop('files')[0];
            if (!file) {
                console.log('No file selected.');
                return;
            }

            gapi.auth2.getAuthInstance().signIn().then(function() {
                var folderId = '1VMEGMhr51UwZ3FFLvg0qxv77Ec_Oh_Zx'; // Replace with the folder ID where you want to upload the file
                var metadata = {
                    name: file.name,
                    parents: [folderId]
                };

                var uploader = new MediaUploader({
                    baseUrl: 'https://www.googleapis.com/upload/drive/v3/files',
                    file: file,
                    token: gapi.auth2.getAuthInstance().currentUser.get().getAuthResponse().access_token,
                    metadata: metadata,
                    onComplete: function(response) {
                        console.log(response);
                        console.log('Upload complete.');
                        // Show success message or perform additional actions
                    },
                    onError: function(response) {
                        console.log(response);
                        console.log('Upload failed.');
                        // Show error message or handle the error
                    }
                });
                uploader.upload();
            });
        });
    });

    function MediaUploader(options) {
        var self = this;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', options.baseUrl + '?' + $.param(options.params), true);
        xhr.setRequestHeader('Authorization', 'Bearer ' + options.token);
        xhr.setRequestHeader('Content-Type', options.file.type);
        xhr.setRequestHeader('Content-Length', options.file.size);
        xhr.onload = function(e) {
            if (xhr.status === 200) {
                options.onComplete(JSON.parse(xhr.response));
            } else {
                options.onError(JSON.parse(xhr.response));
            }
        };
        xhr.onerror = function(e) {
            options.onError(xhr.statusText);
        };
        xhr.send(options.file);
    }
</script>
    </body>
</html>