<footer class="site-footer">
    <div class="container">
      

      <div class="row">
        <div class="col-md-4">
          <h3 class="footer-heading mb-4 text-white">О нас</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
          <p><a href="#" class="btn btn-primary pill text-white px-4">Узнать больше</a></p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h3 class="footer-heading mb-4 text-white">Категории</h3>
                <ul class="list-unstyled">

                  @foreach (App\Models\Category::has('jobs')->limit(5)->where('status', 1)->orderBy('name', 'desc')->get() as $cat)
                    <li><a href="{{ route('category.index', [$cat->id,$cat->slug ]) }}">{{ $cat->name }} ({{ $cat->jobs->count() }})</a></li>
                  @endforeach

  
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled">
                  @foreach (App\Models\Category::has('jobs')->limit(5)->where('status', 1)->orderBy('name', 'asc')->get() as $cat)
                    <li><a href="{{ route('category.index', [$cat->id,$cat->slug ]) }}">{{ $cat->name }} ({{ $cat->jobs->count() }})</a></li>
                  @endforeach
                </ul>
            </div>
          </div>
        </div>

      
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          
      

          </p>
        </div>
        
      </div>
    </div>
  </footer>
</div>

<script src="{{ asset('external/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('external/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('external/js/jquery-ui.js') }}"></script>
<script src="{{ asset('external/js/popper.min.js') }}"></script>
<script src="{{ asset('external/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('external/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('external/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('external/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('external/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('external/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('external/js/aos.js') }}"></script>


<script src="{{ asset('external/js/mediaelement-and-player.min.js') }}"></script>

<script src="{{ asset('external/js/main.js') }}"></script>
  

<script>
    document.addEventListener('DOMContentLoaded', function() {
              var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

              for (var i = 0; i < total; i++) {
                  new MediaElementPlayer(mediaElements[i], {
                      pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                      shimScriptAccess: 'always',
                      success: function () {
                          var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                          for (var j = 0; j < targetTotal; j++) {
                              target[j].style.visibility = 'visible';
                          }
                }
              });
              }
          });
  </script>



 

</body>
</html>