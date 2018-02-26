fileName = "mui.min.css"

file = open(fileName, "r")
fileContent = file.readlines()
file.close()

#print(fileContent)
newString = ""
for string in fileContent[0]:
    #print(string)
    if string == ";" or string == "{" or string == "}":
        string += "\n"
    newString+=string

toReplace = ["{", "}"]
lines = newString.split("\n")
newString = ""
for line in lines:
    if ";" in line:
        pom = line.split(";")
        for c in pom:
            line = "{}\n".format(c)
    for rs in toReplace:
        if rs in line:
            pom = line.split(rs)
            for c in pom:
                line += "{}\n{}".format(c,rs)
    newString+=line
    #print("Line: {}".format(line))
    
#print(newString)
print("HOTOVO")
newFile = open("new{}".format(fileName), "w")
newFile.write(newString)
newFile.close()

