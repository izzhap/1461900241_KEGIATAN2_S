<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Kegiatan 2</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #CEE1FA;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #CEE1FA}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
</style>
</head>
<body>
<div style="overflow-x:auto;">
<h3>No 1. SELECT TABLE data_guru</h3>
<table>
<thead>
<tr>
<th>Id</th>
<th>Nama</th>
<th>NIP</th>
<th>Kelamin</th>
<th>Alamat</th>
<th>No. Telp</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
@foreach ($select as $data)
<tr>
<td>{{$no++}}</td>
<td>{{$data->nama_guru}}</td>
<td>{{$data->nip}}</td>
<td>{{$data->kelamin}}</td>
<td>{{$data->alamat_guru}}</td>
<td>{{$data->telpon_guru}}</td>
</tr>
@endforeach
</tbody>
</table>
<br />
<br />

<h3>No 2. SELECT TABLE data_guru WHERE kelamin laki-laki</h3>
<table>
<thead>
<tr>
<th>Id</th>
<th>Nama</th>
<th>NIP</th>
<th>Kelamin</th>
<th>Alamat</th>
<th>No. Telp</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
@foreach ($selectwhere as $data)
<tr>
<td>{{$no++}}</td>
<td>{{$data->nama_guru}}</td>
<td>{{$data->nip}}</td>
<td>{{$data->kelamin}}</td>
<td>{{$data->alamat_guru}}</td>
<td>{{$data->telpon_guru}}</td>
</tr>
@endforeach
</tbody>
</table>
<br />
<br />

<h3>No 3. SELECT TABLE data_guru JOIN TABLE tbl_jadwal</h3>
<table>
<thead>
<tr>
<th>Id</th>
<th>Nama</th>
<th>NIP</th>
<th>Kelamin</th>
<th>Alamat</th>
<th>No. Telp</th>
<th>Id Jadwal</th>
<th>Id Pelajaran</th>
<th>Id Kelas</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
@foreach ($selectjoin as $data)
<tr>
<td>{{$no++}}</td>
<td>{{$data->nama_guru}}</td>
<td>{{$data->nip}}</td>
<td>{{$data->kelamin}}</td>
<td>{{$data->alamat_guru}}</td>
<td>{{$data->telpon_guru}}</td>
<td>{{$data->id_jadwal}}</td>
<td>{{$data->id_pelajaran}}</td>
<td>{{$data->id_kelas}}</td>
</tr>
@endforeach
</tbody>
</table>
<br />
<br />

<h3>No 4. SELECT TABLE data_guru join TABLE tbl_jadwal WHERE nama_guru like 'Budi%'</h3>
<table>
<thead>
<tr>
<th>Id</th>
<th>Nama</th>
<th>NIP</th>
<th>Kelamin</th>
<th>Alamat</th>
<th>No. Telp</th>
<th>Id Jadwal</th>
<th>Id Pelajaran</th>
<th>Id Kelas</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
@foreach ($selectjoinlike as $data)
<tr>
<td>{{$no++}}</td>
<td>{{$data->nama_guru}}</td>
<td>{{$data->nip}}</td>
<td>{{$data->kelamin}}</td>
<td>{{$data->alamat_guru}}</td>
<td>{{$data->telpon_guru}}</td>
<td>{{$data->id_jadwal}}</td>
<td>{{$data->id_pelajaran}}</td>
<td>{{$data->id_kelas}}</td>
</tr>
@endforeach
</tbody>
</table>
<br />
<br />

</div>
</body>