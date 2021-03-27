
<div class="form-group">
    <div>
        <label for="name">Name </label>
        <input type="text" name="name" value="{{old('name') ?? $product->name }}">
        @error('name') <p style="color: red"> {{$message}}</p> @enderror
    </div>
</div>

<div class="form-group">
    <div>
        <label for="description">Description</label>
        <input type="text"  name="description" value="{{old('description') ?? $product->description }}">
        @error('description') <p style="color: red"> {{$message}}</p> @enderror

    </div>
</div>

<div class="form-group">
    <div>
        <label for="price">Price</label>
        <input type="number"  name="price" value="{{old('price') ?? $product->price }}">
        @error('price') <p style="color: red"> {{$message}}</p> @enderror

    </div>
</div>

<div class="form-group">
    <br/>
    <br/>
    <div>
        <label for="image">Product Image</label>
        <input type="file" id="product_image" name="product_image">
    </div>
    <br/>
    <br/>
</div>
@csrf
