const removeClasses = (xs, c) => {
  xs[0].classList.remove(c)
  if (xs[0]) removeClasses(xs, c)
}

export default removeClasses
