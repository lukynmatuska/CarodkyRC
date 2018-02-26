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
    if "background" in line:
        pom = line.split(":")
        line = ""
        pom[0] += ": transparent;\\\\"
        for c in pom:
            line += c
        line+="\n"
    newString+=line
    #print("Line: {}".format(line))
    
#print(newString)
print("HOTOVO")
newFile = open("new{}".format(fileName), "w")
newFile.write(newString)
newFile.close()

