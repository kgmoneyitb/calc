#!/usr/bin/env python3
import sys
import sympy
import re
from sympy.parsing.mathematica import parse_mathematica

def calculate(formula, inputs_JSON):
    """
    JSON data comes from PHP file calculations.php in form: {txthelper:"Speed", "Speed":2,"Speed_units":"length", "distance":3, "distance_units":"meters", "time":"time_units"}
        Data is sent in via escapeshellcmd with POST info from webpage form.
    """
    #parse JSON to dictionary
    inputs_parsed = json.loads(inputs_JSON)
    variable_dict = {}
    #check each key in the array. If it is the txtHelper or the units, skip. Otherwise, create a new dictionary. Example: {"Speed":{"value":2, "symbol":sympy_symbol_object}, "distance":...}
    for var in inputs_parsed:
        if var == "txtHelper":
            pass
        elif re.search("_units", var):
            pass
        else:
            variable_dict[var] = {'value': inputs_parsed[var], 'symbol': sympy.symbols(var)}
    #create formula object using parse mathematica
    formula = parse_mathematica(formula)
    #Check each variable from the variable dictionary created, if it is blank, then that will be the solved for variable. Otherwise, replace the symbol with the actual value.
    for var in variable_dict:
        if variable_dict[var]['value'] == "":
            solvefor = variable_dict[var]['symbol']
        else:
            formula = formula.subs(variable_dict[var]['symbol'], variable_dict[var]['value'])
    #solve and print as output.
    solution = sympy.solveset(formula, solvefor)
    print(solution)
inputs_JSON = sys.argv[1]
formula = "Speed-distance/time"
calculate(formula, inputs_JSON)