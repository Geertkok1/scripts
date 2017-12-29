import os
print("Vul een bestandsnaam in waarin gezocht moet worden:")
bestand=input()
print("Vul de tekst die gezocht moet worden:")
zoekterm=input()
def check():
        datafile = open(bestand)
        for line in datafile:
            if zoekterm in line:
                #found = True #not necessary
                return True
        return False #because you finished the search without finding anything

if check():
    print (zoekterm,"is gevonden in",bestand)
else:
    print (zoekterm,"is niet gevonden in",bestand)
