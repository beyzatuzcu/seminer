#!/usr/bin/env python
from cezeri_lib.cezeri import Cezeri
import rospy
import math
import time

cezeri = Cezeri(rapor = True)
cezeri.klavye = False

pi8 = math.pi / 8


def hata_kontrol():
    hatalar = []
    if cezeri.gnss.spoofing == true:
        hatalar.append("gnss")
    else:
        pass
    if cezeri.barometre.hata == true:
        hatalar.append("barometre")
    else:
        pass
    if cezeri.radar.hata == true:
        hatalar.append("radar")
    else:
        pass
    if cezeri.lidar.hata == true:
        hatalar.append("lidar")
    else:
        pass
    if cezeri.imu.hata == true:
        hatalar.append("imu")
    else:
        pass
    if cezeri.manytometre.hata == true:
        hatalar.append("manyometre")
    else:
        pass
    if cezeri.batarya.hata == true:
        hatalar.append("batarya")
    else:
        pass
    if cezeri.motor.hata == true:
        hatalar.append("motor")
    else:
        pass

def irtifa_kontrol(min, max):
    if min < cezeri.barometre.irtifa  < max:
        cezeri.dur()
        
        pass
    elif cezeri.barometre.irtifa  <= min:
        cezeri.yukari_git(cezeri.HIZLI)
    
    elif cezeri.barometre.irtifa  >= max:
        cezeri.asagi_git(cezeri.YAVAS)

def aci_ayarla():
    ucgen_x = hedef_x - guncel_x
    ucgen_y = hedef_y - guncel_y
    aci = math.atan2(ucgen_y, ucgen_x)
    if abs(aci - cezeri.manyetometre.veri) < 0.03:
        cezeri.dur()
        cezeri.ileri_git(cezeri.ORTA)
    else:
        if cezeri.manyetometre.veri - aci < 0:
            cezeri.don(0.1)
        else:
            cezeri.don(-0.1)


def batarya_dolum():
    print("batarya")
    print(cezeri.batarya.veri)
    if cezeri.batarya.veri > 99:
        print("kalan enlem ilk", abs(hedef_x - guncel_x))
        global count
        count += 1

        print("kalan enlem iki", abs(hedef_x - guncel_x))

        return

        pass

def inis():
    kalan_enlem = abs(hedef_x - guncel_x)
    kalan_boylam = abs(hedef_y - guncel_y)

    

    if kalan_enlem < 0.1 and kalan_boylam < 0.1:
        cezeri.dur()
        cezeri.asagi_git(cezeri.YAVAS)
        if len(cezeri.hedefler) > 1:
            batarya_dolum()
            pass
        pass

def yon_tanima():
    cezeri_bakis = cezeri.manyetometre.veri
    if 0 - pi8 > cezeri_bakis < pi8:
        yon = "dogu"
    elif pi8 > cezeri_bakis < pi8 * 3:
        yon = "kuzey_dogu"
    elif pi8 * 3 > cezeri_bakis < pi8 * 5:
        yon = "kuzey"
    elif pi8 * 5 > cezeri_bakis < pi8 * 7:
        yon = "kuzey_bati"
    elif pi8 * 7 > cezeri_bakis < math.pi or 0 - math.pi < cezeri_bakis > 0 - pi8 * 7:
        yon = "bati"
    elif  0 - pi8 * 7 < cezeri_bakis > 0 - pi8 * 5:
        yon = "guney_bati"
    elif 0 - pi8 * 5 < cezeri_bakis > 0 - pi8 * 3:
        yon = "guney"
    elif 0 - pi8 * 3 < cezeri_bakis > 0 - pi8:
        yon = "guney_dogu"
    else:
        print("nasil basardin, yonsuz")
    return yon

def engel_tanima():
    if yon_tanima() == "dogu":
        bolge_sol = cezeri.yerel_harita[2]
        bolge_sag = cezeri.yerel_harita[8]
    elif yon_tanima() == "kuzey_dogu":
        bolge_sol = cezeri.yerel_harita[1]
        bolge_sag = cezeri.yerel_harita[5]
    elif yon_tanima() == "kuzey":
        bolge_sol = cezeri.yerel_harita[0]
        bolge_sag = cezeri.yerel_harita[2]
    elif yon_tanima() == "kuzey_bati":
        bolge_sol = cezeri.yerel_harita[3]
        bolge_sag = cezeri.yerel_harita[1]
    elif yon_tanima() == "bati":
        bolge_sol = cezeri.yerel_harita[6]
        bolge_sag = cezeri.yerel_harita[0]
    elif yon_tanima() == "guney_bati":
        bolge_sol = cezeri.yerel_harita[7]
        bolge_sag = cezeri.yerel_harita[3]
    elif yon_tanima() == "guney":
        bolge_sol = cezeri.yerel_harita[8]
        bolge_sag = cezeri.yerel_harita[6]
    elif yon_tanima() == "guney_dogu":
        bolge_sol = cezeri.yerel_harita[5]
        bolge_sag = cezeri.yerel_harita[7]
    else:
        print("nasil basardigini bilmiyorum, helal olsun")

    if bolge_sol.engel == True:
        cezeri.dur()
        cezeri.don(0.05)
        cezeri.ileri_git(cezeri.ORTA)

    if bolge_sag.engel == True:
        cezeri.dur()
        cezeri.don(-0.05)
        cezeri.ileri_git(cezeri.ORTA)

count = 0
while cezeri.aktif():

    if count == 0:
        hedef = cezeri.hedefler[0]
    else:
        hedef = cezeri.hedefler[1]
    hedef_x = hedef.bolge.enlem
    hedef_y = hedef.bolge.boylam

    guncel_x = cezeri.gnss.enlem
    guncel_y = cezeri.gnss.boylam

    irtifa_kontrol(80, 100)
    aci_ayarla()
    engel_tanima()    
    inis()
    engelasma()