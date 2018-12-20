program Input_Produk;

uses crt;

var
        NamaProduk, TipeProduk : string;
        idProduk, HargaProduk : integer;

BEGIN
        clrscr;
        write('ID Produk : ');
        readln(idProduk);
        write('Nama Produk : ');
        readln(NamaProduk);
        write('Tipe Produk : ');
        readln(TipeProduk);
        write('Harga Produk : ');
        readln(HargaProduk);
        readln;
        writeln('Data Berhasil di Inputkan');
        readln;

END.