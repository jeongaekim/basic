print(1+1)
print(1-1)
print(1*1)
print(1/1)
print('hello')
print("hello")
print("hell'o' world")
#escape 역슬래쉬\\를 통해 특수기호가 아닌 문자취금
print("he\"l\"lo")
#newline
print('h')
print('i')

print('h\ni')

print('''
h
i
''')

a = 'hello'
print(a)
print(len(a))
print(a[0])
print(a[2:4])
print((a+'\n')*2)
name = 'babi'
print('안녕'+name+'야 너를 만나서 반가워 후후 안녕 '+name+'야')
#positional format
print('안녕{}야 너를 만나서 반가워 후후 안녕 {}야'.format('babi','babi'))
#named format
print('안녕{name}야 너를 만나서 반가워 후후 안녕 {name}야'.format(name='babi'))
#Number
print(1) #Integer
#String
print('Hello world')
#Boolean
print(True) #참
print(False) #거짓
#Expression
print(1+1)
print('Hello '+'world') #Hello world
#Comparison operator
print(1==1) #True
print(1<2) #True
print(2<1) #False
#Membership operator
print('world' in 'Hello world') #True

import os.path
print(os.path.exists('boolean2.py'))#directoty에 file exist여부


# conditional
user_id = input('id?')
user_pwd = input('password?')

'''
if user_pwd == '111111':  숫자의 형태로 주어야함
    print('Hello master')
else:
    print('Who are you?')
'''
if user_id == 'egoing':
    if user_pwd == '111111':
        print('Hello master')
    else:
        print('Who are you?')
else:
    print('Who are you?') #같은 블럭의 경우 같은 들여쓰기로 해야함

if user_id == 'egoing' and user_pwd == '111111':
        print('Hello master')
elif user_id == 'a' and user_pwd == '111111':
        print('Hello master')
else:
        print('Who are you?')

#list
s = [1, 'four', 9, 16, 25]
print(s)
print(s[1])
print(len(s))#lenth
s[1] = 4
print(s)
del s[2]
print(s)
s.append('egoing') #add the cube of 6
print(s)

#len('abcde') =5
#len(['a','b','c'])=3
#'abc'.capitalize() = Abc
#person = {'name':'jeongae'.'address':'suwon'}  person['name']='jeongae'

#for
print(1)
for value in ['a','b','c']:
    print(value)  #abc
#range
print(2)
print('---range---')
for value in range(10):
    print(value)    # 12345678910

#fuction
def average():
    a=1
    b=2
    c=3
    s=a+b+c
    r=s/3
    print(r)

average()

def average2(a,b,c):
    s=a+b+c
    r=s/3
    return r

print(average2(10,20,30))
