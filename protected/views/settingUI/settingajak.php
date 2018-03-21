<div class="search-header">
    <div class="card card-transparent no-m">
        <div class="card-content no-s">
            <div class="z-depth-1 search-tabs">
                <div class="search-tabs-container">
                    <div class="col s12 m12 l12">
                        <div class="row search-tabs-row search-tabs-header">
                            <div class="col s12 m12 l10 left">
                                <span>Bread crumbs</span>
                            </div>
                        </div>

                        <div class="row search-tabs-row search-tabs-container grey lighten-4">
                            <div class="col s12">

                                <ul class="">
                                    <li class="s3"><span style="font-size: 20px;">Settings</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="row"></div>-->
<div class="row s12" style="margin-left: 30px; margin-top: 30px;">
<!DOCTYPE html>

<h4>The XMLHttpRequest Object</h4>

<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>


<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "demo_get.asp", true);
  xhttp.send();
}
</script>

</div>