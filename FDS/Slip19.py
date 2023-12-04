"""
Q.1) 
Write a Python program
1. To create a dataframe containing columns name, age and percentage. Add 10 
rows to the dataframe. View the dataframe. 
2. Add a column ‘remarks’ with empty values. Display the data.
3.To drop ‘remarks’ column from the dataframe And print the modified data
"""

import pandas as pd
import matplotlib.pyplot as plt
df=pd.DataFrame(columns=["Name","Age","Percentage"])
df.loc[0]=["Sankalp",21,94]
df.loc[1]=["Manas",20,94]
df.loc[2]=["Om",19,94]
df.loc[3]=["Raj",22,94]
df.loc[4]=["Rahul",19,74]
df.loc[5]=["Aman",20,84]
df.loc[6]=["Shwan",20,82]
df.loc[7]=["Gauraj",23,90]
df.loc[8]=["Sarthak",21,72]
df.loc[9]=["Satyam",21,88]
print(df)

df.loc[10]=["Purnendu",20,None]
df.loc[11]=["Shruti",20,82]
df.loc[12]=["Devesh",None,90]
df.loc[13]=["Shreyash",21,72]
df.loc[14]=["Shobhit",21,None]
df["remark"]=None
print(df)

df.drop(columns="remark",axis=1,inplace=True)
print(df)
