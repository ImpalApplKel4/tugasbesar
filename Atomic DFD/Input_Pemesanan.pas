program Input_Pemesanan;

uses crt;

var
        idPemesanan, totalHarga, TotaldiBayar : int;
	namaCust, namaInstansi, CP, alamatCust, status, pesanan : string
	

BEGIN
        clrscr;
        write('ID Pemesanan : ');
        readln(idPemesanan);
        write('Nama Customer : ');
        readln(namaCust);
        write('Nama Instansi : ');
        readln(namaInstansi);
        write('Kontak : ');
        readln(CP);
	write('Alamat Customer : ');
	readln(alamatCust);
	write('Status : ');
	readln(status);
	write('Pesanan : ');
	readln(pesanan);
	write('Total Harga');
	readln(totalHarga);
	write('Tanggal Pesan', DateToStr(Now));
	write('Tanggal dibayar', DateToStr(Date()));
	write('Total dibayar : ');
	readln(TotaldiBayar);
        readln;
        writeln('Data Berhasil di Inputkan');
        readln;

END.