reg = memory.getregister
regw = memory.setregister
read8 = memory.readbyte
write8 = memory.writebyte
read16 = memory.readword
read32 = memory.readdword

function printf(...) print(string.format(...)) end
function printhex(string, hex) 
    if hex == nil then
        print(string .. ": nil")
    else
        printf("%s: %#.8x", string, hex)
    end
end

memory.registerexec(0x0209cc2c, function()
    printhex("id", reg("r0"))
end)
memory.registerexec(0x0209cb98, function()
    printhex("34", read32(reg("r0")+4))
end)

memory.registerexec(0x0209cab8, function()
    printhex("0", read32(reg("r0")+4))
end)

memory.registerexec(0x0209d7e8, function()
    printhex("enc", read32(reg("r0")+4))
    -- print("enc_de: ", read32(reg("r0")+8))
    -- printhex("enc_mda: ", read32(reg("r0")+12))
end)

memory.registerexec(0x0209d894, function()
    printhex("enc_id", read32(reg("r0")+4))
end)
