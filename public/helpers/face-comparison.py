import cv2

# Carga las imágenes de las dos caras a comparar
imagen1 = cv2.imread("ruta/a/la/imagen1.jpg")
imagen2 = cv2.imread("ruta/a/la/imagen2.jpg")

# Convierte las imágenes a escala de grises
imagen1_gris = cv2.cvtColor(imagen1, cv2.COLOR_BGR2GRAY)
imagen2_gris = cv2.cvtColor(imagen2, cv2.COLOR_BGR2GRAY)

# Crea un objeto para el detector de caras
detector_caras = cv2.CascadeClassifier("ruta/a/haarcascade_frontalface_default.xml")

# Detecta las caras en las imágenes
caras1 = detector_caras.detectMultiScale(imagen1_gris, scaleFactor=1.1, minNeighbors=5)
caras2 = detector_caras.detectMultiScale(imagen2_gris, scaleFactor=1.1, minNeighbors=5)

# Si se detecta una sola cara en cada imagen, compara las caras
if len(caras1) == 1 and len(caras2) == 1:
    # Obtiene las coordenadas de la cara en la imagen 1
    (x1, y1, w1, h1) = caras1[0]

    # Obtiene las coordenadas de la cara en la imagen 2
    (x2, y2, w2, h2) = caras2[0]

    # Recorta las imágenes para que solo contengan la cara
    cara1 = imagen1_gris[y1:y1+h1, x1:x1+w1]
    cara2 = imagen2_gris[y2:y2+h2, x2:x2+w2]

    # Ajusta el tamaño de las caras para que tengan el mismo tamaño
    cara1 = cv2.resize(cara1, (cara2.shape[1], cara2.shape[0]))

    # Calcula la diferencia entre las dos caras
    diferencia = cv2.absdiff(cara1, cara2)

    # Calcula el porcentaje de similitud entre las dos caras
    similitud = 100 - (cv2.countNonZero(diferencia) * 100 / diferencia.size)

    # Imprime el porcentaje de similitud
    print("El porcentaje de similitud entre las dos caras es:", similitud)
else:
    print("No se detectó una sola cara en cada imagen.")
