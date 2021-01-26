#!/bin/python3

import math
import os
import random
import re
import sys

# Complete the fibonacciModified function below.
def fibonacciModified(t1, t2, n):
    t3 = t1 + pow(t2,2)
    print(t3)
    if(n==1):
        return t3
    
    
    return fibonacciModified(t2,t3,n-1)


t1T2n = input().split()

t1 = int(t1T2n[0])

t2 = int(t1T2n[1])

n = int(t1T2n[2])
result = fibonacciModified(t1, t2, n-2)
