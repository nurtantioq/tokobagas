@extends('layouts.app')

@section('content')
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Ad Name:</label>
                <input type="email" class="form-control" id="inputAds" placeholder="Ad">
            </div>
            <div class="form-group">
                <label for="">Select Category</label>
                <select class="form-control" id="category" name="category">
                        <option value="0">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Select Province and City</label>
                <select class="form-control" id="province" name="province" data-url="{{ route('ajax.get-city-options') }}">
                        <option value="0">Select Province</option>
                    @foreach($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
                <br>
                <select class="form-control" id="city" name="city">
                    <option value="">Your city?</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Location</label>
                <input type="text" class="form-control" id="inputLocation" placeholder="Location">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="text" class="form-control" id="inputPrice" placeholder="Price?">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Nego?
                </label>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
