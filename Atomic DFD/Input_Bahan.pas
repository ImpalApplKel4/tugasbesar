program Input_Bahan;

uses crt,sysutils;

var
    NamaBahan: string;
    stockBahan, idBahan : integer;

BEGIN
    clrscr;
    writeln('Id Bahan : ');
    readln(idBahan);
    writeln('Nama Bahan : ');
    readln(NamaBahan);
    writeln('Date Valid : ',DateToStr(Now));
    writeln('Stock Bahan : ');
    readln(stockBahan);
    readln;
    writeln('Data Berhasil di Inputkan');
    readln;