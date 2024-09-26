import pandas as pd
from sklearn.preprocessing import StandardScaler
from scipy.cluster.hierarchy import dendrogram, linkage
import matplotlib.pyplot as plt

data = {
    'Nama Sekolah': ['SMA Negeri 1 Makassar', 'SMA Negeri 2 Makassar', 'SMA Negeri 3 Makassar',
                     'SMA Negeri 4 Makassar', 'SMA Negeri 5 Makassar', 'SMA Negeri 6 Makassar',
                     'SMA Negeri 7 Makassar', 'SMA Negeri 8 Makassar', 'SMA Negeri 9 Makassar',
                     'SMA Negeri 10 Makassar', 'SMA Negeri 11 Makassar', 'SMA Negeri 12 Makassar',
                     'SMA Negeri 13 Makassar', 'SMA Negeri 14 Makassar', 'SMA Negeri 15 Makassar',
                     'SMA Negeri 16 Makassar', 'SMA Negeri 17 Makassar', 'SMA Negeri 18 Makassar',
                     'SMA Negeri 19 Makassar', 'SMA Negeri 20 Makassar', 'SMA Negeri 21 Makassar',
                     'SMA Negeri 22 Makassar', 'SMA Negeri 23 Makassar'],
    'Latitude': [-5.135020808705, -5.169539053142, -5.168332560249, -5.116731648420, -5.149079977979,
                 -5.089240691107, -5.081595164084, -5.169858811914, -5.179416252936, -5.18566285202,
                 -5.171619906171, -5.163083777869, -5.175232640651, -5.165723509511, -5.080335897391,
                 -5.137467251929, -5.120861083650, -5.125554036926, -5.163758086491, -5.136824343628,
                 -5.120861083650, -5.104416600922, -5.141069221117],
    'Longitude': [119.418717593012, 119.412733425786, 119.412395646756, 119.418923706025, 119.460825934161,
                  119.481909490260, 119.533885860188, 119.41420181546, 119.45237087997, 119.48830001561,
                  119.416158737848, 119.483603148255, 119.47784552163, 119.40884900007, 119.49490001086,
                  119.41140658086, 119.492209561218, 119.53175786038, 119.51250930322, 119.51513475096,
                  119.492209561218, 119.53146349792, 119.47452745142]
}

df = pd.DataFrame(data)

scaler = StandardScaler()
df_scaled = scaler.fit_transform(df[['Latitude', 'Longitude']])

linked = linkage(df_scaled, method='ward')

plt.figure(figsize=(10, 7))
dendrogram(linked,
           orientation='top',
           labels=df['Nama Sekolah'].values,
           distance_sort='descending',
           show_leaf_counts=True)
plt.title('Dendrogram for Agglomerative Clustering of Schools in Makassar')
plt.xlabel('School Name')
plt.ylabel('Euclidean Distance')
plt.tight_layout()
plt.savefig('img/dendogram_output.png')  

# plt.show()
