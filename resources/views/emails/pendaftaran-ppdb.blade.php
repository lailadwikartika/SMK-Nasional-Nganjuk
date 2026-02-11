<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran PPDB</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { background-color: #0d6efd; color: white; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
        .content { padding: 20px; }
        .footer { text-align: center; font-size: 12px; color: #777; margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 8px; border-bottom: 1px solid #eee; text-align: left; }
        th { width: 40%; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>PPDB SMK Nasional Nganjuk</h2>
        </div>
        <div class="content">
            @if($type === 'admin')
                <p>Halo Admin,</p>
                <p>Terdapat pendaftaran baru untuk PPDB dengan rincian sebagai berikut:</p>
            @else
                <p>Halo <strong>{{ $data['nama_lengkap'] }}</strong>,</p>
                <p>Terima kasih telah mendaftar di SMK Nasional Nganjuk. Berikut adalah bukti pendaftaran Anda:</p>
            @endif

            <table>
                <tr>
                    <th>Nomor Pendaftaran</th>
                    <td><strong>{{ $data['nomor_pendaftaran'] }}</strong></td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $data['nama_lengkap'] }}</td>
                </tr>
                <tr>
                    <th>Jalur Pendaftaran</th>
                    <td>{{ $data['jalur_nama'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Jurusan Pilihan</th>
                    <td>{{ $data['jurusan_pilihan'] }}</td>
                </tr>
                <tr>
                    <th>Asal Sekolah</th>
                    <td>{{ $data['asal_sekolah'] }}</td>
                </tr>
                <tr>
                    <th>Tanggal Daftar</th>
                    <td>{{ $data['tanggal_daftar'] ?? date('d/m/Y') }}</td>
                </tr>
            </table>

            @if($type !== 'admin')
                <p>Simpan email ini sebagai bukti pendaftaran. Panitia kami akan segera memverifikasi data Anda dan menghubungi Anda untuk proses selanjutnya.</p>
            @endif
            
            <p>Salam,<br>Panitia PPDB SMK Nasional Nganjuk</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} SMK Nasional Nganjuk. All rights reserved.
        </div>
    </div>
</body>
</html>