# Proiect-PHP
Aplicatie web de tip Agenda/calendar (Organizer). 

Pagini:  Conectare, Inregistrare, Vizualizare profil, Adauga task, Lista taskuri. Se vor folosi: HTML5, CSS, PHP, sablonare, verificari atat pe HTML cat si pe PHP, adaugand mesajele de succes/eroare corespunzatoare. 
Toate paginile contin un banner, un footer, un meniu de navigatie vertical, in partea stanga, iar in continuarea lui este afisat continutul paginii.

!!Daca incepeti proiectul inainte sa lucram cu baze de date si sesiuni, puteti incepe cu partea de html/css, meniu, templating, formulare, trimiterea datelor din formulare catre server.

Descriere pagini pe scurt:

Conectare:
Formular de login 
Email
Parola
Inregistrare:
Formular de inregistrare
Nume
Prenume
Email
Parola

Vizualizare profil:
Poza de profil sau o poza default de tip ‘no profile pic’ (daca nu exista o poza salvata in baza de date)
O lista sau tabel cu toate datele utilizatorului
Un formular pentru adaugarea pozei de profil
Adauga task:
Formular pentru adaugarea taskului
Titlu
Data
Tip (dropdown: task, eveniment, reminder)
Descriere 
Lista taskuri
(facultativ) Formular cu dropdown cu cele 3 tipuri e taskuri, pentru a filtra taskurile dupa un tip anume 
Tabel cu toate taskurile pentru utilizatorul conectat – daca nu exista niciun task, se afiseaza un mesaj ‘NICIUN TASK SALVAT. ADAUGA UN TASK.’ 
Pentru fiecare task, buton de ‘Termina task’

DESCRIERE DETALIATA PROIECT

Aplicatia are doua sectiuni, una pentru utilizator neconectat, una pentru utilizator conectat.

Atunci cand utilizatorul este neconectat, paginile aplicatiei web contin un banner si un meniu cu doua optiuni: Conectare si Inregistrare.

Un utilizator se poate inregistra prin completarea unui formular de inregistrare cu urmatoarele campuri: nume, prenume, email, parola si un buton de submit, iar datele acestuia se vor salva in baza de date. Email-ul trebuie sa fie unic, iar parola criptata.

Atentie! Pentru salvarea datelor in baza de date, acestea vor fi testate, pentru a evita introducerea de tag-uri html, scripturi, link-uri, dar si SQL injection.

Dupa inregistrare, utilizatorul se poate conecta, utilizand un formular de conectare cu doua campuri: email, parola, si un buton de submit.
daca conectarea este esuata, se va afisa un mesaj de eroare.
daca conectarea este efectuata cu succes, se va deschide o sesiune, iar utilizatorul va fi redirectionat catre sectiunea pentru utilizator conectat.

Atunci cand utilizatorul este conectat, paginile aplicatiei web contin un banner si un meniu cu urmatoarele optiuni: Deconectare, Adauga task, Lista task-uri si Vizualizare profil.

La apasarea pe “Deconectare”, sesiunea va fi inchisa, iar utilizatorul va fi redirectionat catre pagina de conectare.

In pagina “Vizualizare profil” sunt afisate toate datele utilizatorului (nume, prenume, email), dar si poza de profil. In cazul in care campul poza_profil din baza de date nu este completat, se va afisa o poza default (poza de tip ‘no profile pic’).

Tot in aceasta pagina exista un formular cu un singur input de tip file si un buton de submit. La trimiterea formularului, poza este salvata pe server, iar campul poza_profil din baza de date este actualizat, pentru utilizatorul conectat (luam id-ul din sesiune).
Dupa ce s-a salvat poza cu succes pe server, este necesara apelarea unei functii care ruleaza un query de update pentru campul poza_profil, pt utilizatorul conectat.

In pagina “Lista taskuri” sunt afisate toate task-urile (titlu, data, tip, descriere, status) intr-un tabel sau intr-o  lista, iar daca nu exista niciun task, se afiseaza un mesaj ‘NICIUN TASK SALVAT. ADAUGA UN TASK.’ Textul ADAUGA UN TASK este o ancora care duce catre pagina de adaugare task. Pentru fiecare task ‘in asteptare’ (status 0) exista si un buton ‘Termina task’ care actualizeaza statusul task-ului in baza de date (cu valoarea 1).

In pagina “Adauga task” este un formular cu campurile: titlu, data, tip. La submit, se adauga o noua inregistrare in tabela task, cu status 0; id_utilizator va fi luat din sesiune. Daca s-a adaugat task-ul cu success, se afiseaza un mesaj de succes, altfel un mesaj general de eroare.

Baza de date:
Utilizator – id PK, nume, prenume, email, parola, poza_profil default NULL
Task – id Pk, titlu, data, tip, descriere, status (0 – in asteptare, 1 - terminat), id_utilizator FK
