#!/usr/bin/env python3
import sys
import htmlmin

def main():
    for fname in sys.argv[1:]:
        with open(fname, 'r') as f:
            print("Minifying: " + fname)
            data = f.read()
            minified = htmlmin.minify(data,
                                      remove_comments=True,
                                      remove_empty_space=True,
                                      remove_all_empty_space=True,
                                      reduce_boolean_attributes=True)
        with open(fname, 'w') as f:
            f.write(minified)

if __name__ == '__main__':
    main()
