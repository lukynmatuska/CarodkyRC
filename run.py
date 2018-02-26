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

#print(newString)
print("HOTOVO")
newFile = open("new{}".format(fileName), "w")
newFile.write(newString)
newFile.close()

