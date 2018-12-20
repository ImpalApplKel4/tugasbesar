program Input_Pengeluaran;

uses crt,sysutils;

var
    keterangan : string;
    idPengeluaran, hargaPengeluaran : integer;

BEGIN
    clrscr;
    writeln('Id Pengeluaran : ');
    readln(idPengeluaran);
    writeln('Ket : ');
    readln(keterangan);
    writeln('Harga Pengeluaran : ');
    readln(hargaPengeluaran);
    writeln('Tanggal Pengeluaran : ',DateToStr(Now));
    readln;
    writeln('Data Berhasil di Inputkan');
    readln;

END.