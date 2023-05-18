@extends('layouts.app')

@section('container')
<div class="d-flex justify-content-center">
      <div class="pict mt-5">
        <img
          src="gambar/download.jpg"
          class="mt-5"
          style="
            width: 250px;
            height: 260px;
            border-radius: 180px;
            margin-left: 125px;
          "
        />
        <div class="input-group mb-3 d-flex justify-content-center">
          <form action="">
            <label
              class="input-group-text rounded-circle d-flex justify-content-center"
              style="
                width: 70px;
                height: 70px;
                background-color: aqua;
                position: relative;
                width: 70px;
                height: 70px;
                left: 55px;
                top: -35px;
                border-radius: 180px;
                margin-left: 160px;
              "
              for="inputGroupFile01"
            >
              <i data-feather="upload"></i>
            </label>
            <input
              type="file"
              name="image"
              class="form-control"
              hidden
              id="inputGroupFile01"
            />

            <h2 class="d-flex justify-content-center">Ardiansyah</h2>

            <div>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Name"
                style="
                  width: 500px;
                  height: 60px;
                  padding: 20px;
                  margin-top: 40px;
                  margin-bottom: 25px;
                  border-radius: 20px;
                "
              />
            </div>
            <div>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Email"
                style="
                  width: 500px;
                  height: 60px;
                  padding: 20px;
                  margin-bottom: 25px;
                  border-radius: 20px;
                "
              />
            </div>
            <div>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
                style="
                  width: 500px;
                  height: 60px;
                  padding: 20px;
                  margin-bottom: 25px;
                  border-radius: 20px;
                "
              />
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection