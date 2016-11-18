  <div class="slider">
    <div class="callbacks_container">
        <ul class="rslides" id="slider">
          @foreach($sliders as $slider)
          <li><img src="/tienda/slider/{{ $slider->imagen }}" width="1600" height="627" class="img-responsive" alt=""/>
           <!-- <div class="banner_desc">
               <font color="#FFFFFF" size="18" face="Comic Sans MS, Arial, MS Sans Serif">{{ $slider->titulo}}.</font>
                <h2>{{ $slider->noticia}}.</h2>
           </div>
           -->
          </li>
           @endforeach
        </ul>
    </div>
</div>