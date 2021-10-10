def move_zeros(array):
    """
    Move zero to the end of the array
    While maintaining the order of the array
    """
    non_zero_items = [x for x in array if x != 0]

    return non_zero_items + [0 for x in range(len(array) - len(non_zero_items))]

testing = [9, 0, 0, 9, 1, 2, 0, 1, 0, 1, 0, 3, 0, 1, 9, 0, 0, 0, 0, 9]

print(move_zeros(testing))
