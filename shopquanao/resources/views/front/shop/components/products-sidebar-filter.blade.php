
<form action="{{request()->segment(2) == 'product' ? 'shop' : ''}}">
    <div class="filter-widget">
        <h4 class="fw-title">Thể Loại</h4>
        <ul class="filter-catagories">

            @foreach($categories as $category)
                <li><a href="shop/category/{{$category->name}}">{{$category->name}}</a></li>
            @endforeach

        </ul>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Hãng</h4>
        <div class="fw-brand-check">

            @foreach($brands as $brand)
                <div class="bc-item">
                    <label for="bc-{{$brand->id}}">
                        {{$brand->name}}
                        <input type="checkbox"
                               {{(request("brand")[$brand->id] ?? '') == 'on' ? 'checked' : ''}}
                               id="bc-{{$brand->id}}"
                               name="brand[{{$brand->id}}]"
                               onchange="this.form.submit();">
                        <span class="checkmark"></span>
                    </label>
                </div>
            @endforeach

        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Giá</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min">
                    <input type="text" id="maxamount" name="price_max">
                </div>
            </div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                 data-min="10" data-max="999"
                 data-min-value="{{str_replace('$', '', request('price_min'))}}"
                 data-max-value="{{str_replace('$', '', request('price_max'))}}">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>

        <button type="submit" class="filter-btn">Lọc</button>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Màu Sắc</h4>
        <div class="fw-color-choose">
            <div class="cs-item">
                <input type="radio" id="cs-black" name="color" value="black" onchange="this.form.submit();"
                    {{request('color') == 'black' ? 'checked' : ''}}>
                <label class="cs-black {{request('color') == 'black' ? 'font-weight-bold' : ''}}" for="cs-black">Đen</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-gray" name="color" value="gray" onchange="this.form.submit();"
                    {{request('color') == 'gray' ? 'checked' : ''}}>
                <label class="cs-gray {{request('color') == 'gray' ? 'font-weight-bold' : ''}}" for="cs-gray">Xám</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-blue" name="color" value="blue" onchange="this.form.submit();"
                    {{request('color') == 'blue' ? 'checked' : ''}}>
                <label class="cs-blue {{request('color') == 'blue' ? 'font-weight-bold' : ''}}" for="cs-blue">Xanh Dương</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-yellow" name="color" value="yellow" onchange="this.form.submit();"
                    {{request('color') == 'yellow' ? 'checked' : ''}}>
                <label class="cs-yellow {{request('color') == 'yellow' ? 'font-weight-bold' : ''}}" for="cs-yellow">Vàng</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-red" name="color" value="red" onchange="this.form.submit();"
                    {{request('color') == 'red' ? 'checked' : ''}}>
                <label class="cs-red {{request('color') == 'red' ? 'font-weight-bold' : ''}}" for="cs-red">Đỏ</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-green" name="color" value="green" onchange="this.form.submit();"
                    {{request('color') == 'green' ? 'checked' : ''}}>
                <label class="cs-green {{request('color') == 'green' ? 'font-weight-bold' : ''}}" for="cs-green">Xanh Lá</label>
            </div>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Size</h4>
        <div class="fw-size-choose">
            <div class="sc-item">
                <input type="radio" id="s-size" name="size" value="s" onchange="this.form.submit();"
                    {{request('size') == 's' ? 'checked' : '' }}>
                <label for="s-size" class="{{request('size') == 's' ? 'active' : ''}}">S</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="m-size" name="size" value="m" onchange="this.form.submit();"
                    {{request('size') == 'm' ? 'checked' : '' }}>
                <label for="m-size" class="{{request('size') == 'm' ? 'active' : ''}}">M</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="l-size" name="size" value="l" onchange="this.form.submit();"
                    {{request('size') == 'l' ? 'checked' : '' }}>
                <label for="l-size" class="{{request('size') == 'l' ? 'active' : ''}}">L</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="xl-size" name="size" value="xl" onchange="this.form.submit();"
                    {{request('size') == 'xl' ? 'checked' : '' }}>
                <label for="xl-size" class="{{request('size') == 'xl' ? 'active' : ''}}">XL</label>
            </div>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Tags</h4>
        <div class="fw-tags">
            <a href=#">Giày </a>
            <a href=#">Áo Khoác</a>
            <a href=#">Áo Thun</a>
            <a href=#">Áo Sơ Mi</a>
            <a href=#">Mũ</a>
            <a href=#">Cặp sách</a>
            <a href=#">Váy</a>
        </div>
    </div>
</form>
