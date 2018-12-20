program Input_Karyawan;

uses crt;

var
        NamaKar, Divisi, Nohp: string;
        NIK, Gaji: integer;

BEGIN
        clrscr;
        write('Nomor Induk Karyawan: ');
        readln(NIK);
        write('Nama Karyawan: ');
        readln(NamaKar);
        write('Divisi: ');
        readln(Divisi);
        write('Gaji: ');
        readln(Gaji);
		write('No Handphone: ');
        readln(Nohp);
        readln;
        writeln('Data Berhasil di Inputkan');
        readln;

END.