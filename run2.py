fileName = "newmui.min.css"

file = open(fileName, "r")
fileContent = file.readlines()
file.close()

#print(fileContent)
newString = ""
for string in fileContent:
    #print(string)
    if "background-color:" in string:
        del fileContent[fileContent.index(string)]
    newString+=string

#print(newString)
print("HOTOVO")
newFile = open("new{}".format(fileName), "w")
newFile.write(newString)
newFile.close()

