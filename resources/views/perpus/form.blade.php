  <tr>
    <td>ID Buku</td>
    <td>{!! Form::text('id_buku',null,['class'=>'form-control']) !!}</td>
    </tr>
    
    
    <tr>
    <td>Judul</td>
    <td>{{ Form::text('judul',null,['class'=>'form-control']) }}</td>
    </tr>
    
    <tr>
    <td>Penerbit</td>
    <td>{{ Form::text('penerbit',null,['class'=>'form-control']) }}</td>
    </tr>
    
    <tr>
    <td>Pengarang</td>
    <td>{{ Form::text('pengarang',null,['class'=>'form-control']) }}</td>
    </tr>
    
    <tr>
    <td>Rak</td>
    <td>{{ Form::text('rak',null,['class'=>'form-control']) }}</td>
    </tr>

    <tr>
    <td>Foto</td>
    <td>{{ Form::file('foto',null,['class'=>'form-control']) }}</td>
    </tr>
