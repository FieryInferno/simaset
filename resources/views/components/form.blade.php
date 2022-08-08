<div class="card" style="background-color: #58dfa0;box-shadow: 0 0 0;">
  <form method="post" action="{{url('identifikasi_aset')}}">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label>Nama Aset</label>
        <input
          type="text"
          class="form-control"
          placeholder="Ketik disini..."
          name="nama"
        >
      </div>
      <div class="form-group">
        <label>Kode</label>
        <input
          type="text"
          class="form-control"
          placeholder="Ketik disini..."
          name="kode"
        >
      </div>
    </div>
    <div class="card-footer text-center">
      <button type="submit" class="btn btn-light">Cari</button>
    </div>
  </form>
</div>